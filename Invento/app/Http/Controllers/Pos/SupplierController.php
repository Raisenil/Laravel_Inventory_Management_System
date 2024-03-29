<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use Auth;
use Illuminate\Support\Carbon;

class SupplierController extends Controller
{
    public function SupplierAll(){
        // $suppliers = Supplier:: all();
        $suppliers = Supplier:: latest()->get();
        return view('backend.supplier.supplier_all',compact('suppliers'));
    }  
    
    public function SupplierAdd(){
        return view('backend.supplier.supplier_add');
    }

    public function SupplierStore(Request $request){
        Supplier::insert([
            'name'=>$request->name,
            'mobile_no'=>$request->mobile_no,
            'email'=>$request->email,
            'address'=>$request->address,
            'created_by'=>Auth::user()->id,
            'created_at'=>Carbon::now(),
        ]);

        $notification=array(
            'message'=>'Supplier Inserted Successfully',
            'alert-type'=>'success'
        );

        return redirect()->route('supplier.all')->with($notification);
    }

    public function SupplierEdit($id){
        $supplier = Supplier::FindOrFail($id);
        return view('backend.supplier.supplier_edit',compact('supplier'));
    }

    public function SupplierUpdate(Request $request){
        $supplier_id=$request->id;
        Supplier::FindOrFail($supplier_id)->update([
            'name'=>$request->name,
            'mobile_no'=>$request->mobile_no,
            'email'=>$request->email,
            'address'=>$request->address,
            'updated_by'=>Auth::user()->id,
            'updated_at'=>Carbon::now(),
        ]);

        $notification=array(
            'message'=>'Supplier Updated Successfully',
            'alert-type'=>'success'
        );

        return redirect()->route('supplier.all')->with($notification);
    }

    public function DeleteSupplier($id){
        Supplier::FindOrFail($id)->delete();
        
        $notification = array(
            'message' => 'Supplier Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
