<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Unit;
use Auth;
use Illuminate\Support\Carbon;

class ProductController extends Controller
{
    public function ProductAll(){
        $products = Product:: latest()->get();
        return view('backend.product.product_all',compact('products'));
    }

    public function ProductAdd(){
        $supplier=Supplier::all();
        $category=Category::all();
        $unit=Unit::all();
        return view('backend.product.product_add',compact('supplier','category','unit'));
    }

    public function ProductStore(Request $request){
        Product::insert([
            'name'=>$request->name,
            'supplier_id'=>$request->supplier_id,
            'unit_id'=>$request->unit_id,
            'category_id'=>$request->category_id,
            'quantity'=>'0',
            'created_by'=>Auth::user()->id,
            'created_at'=>Carbon::now(),
        ]);

        $notification=array(
            'message'=>'Product Inserted Successfully',
            'alert-type'=>'success'
        );

        return redirect()->route('product.all')->with($notification);
    }

    public function ProductEdit($id){
        $supplier=Supplier::all();
        $category=Category::all();
        $unit=Unit::all();
        $product = Product::FindOrFail($id);
        return view('backend.product.product_edit',compact('product','supplier','category','unit'));
    }

    // public function SupplierUpdate(Request $request){
    //     $supplier_id=$request->id;
    //     Supplier::FindOrFail($supplier_id)->update([
    //         'name'=>$request->name,
    //         'mobile_no'=>$request->mobile_no,
    //         'email'=>$request->email,
    //         'address'=>$request->address,
    //         'updated_by'=>Auth::user()->id,
    //         'updated_at'=>Carbon::now(),
    //     ]);

    //     $notification=array(
    //         'message'=>'Supplier Updated Successfully',
    //         'alert-type'=>'success'
    //     );

    //     return redirect()->route('supplier.all')->with($notification);
    // }

    // public function DeleteSupplier($id){
    //     Supplier::FindOrFail($id)->delete();
        
    //     $notification = array(
    //         'message' => 'Supplier Deleted Successfully',
    //         'alert-type' => 'success'
    //     );

    //     return redirect()->back()->with($notification);
    // }
}
