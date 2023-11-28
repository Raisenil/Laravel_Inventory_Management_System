<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Supplier;
use App\Models\Product;
use App\Models\Unit;
use App\Models\Category;
use Auth;
use Illuminate\Support\Carbon;

class PurchaseController extends Controller
{
    public function PurchaseAll(){
        $allData = Purchase::orderBy('date','desc')->orderBy('id','desc')->get();
        return view('backend.purchase.purchase_all',compact('allData'));
    }

    public function PurchaseAdd(){
        $supplier=Supplier::all();
        $category=Category::all();
        $unit=Unit::all();
        return view('backend.purchase.purchase_add',compact('supplier','category','unit'));
    }

    public function PurchaseStore(Request $request){
        if($request->category_id==null){
            $notification = array(
                'message' => 'Sorry you did not select any item',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);

        }else{
            $count_category = count($request->category_id);
            for($i=0;$i<$count_category;$i++){
                if($request->buying_qty[$i]==null && $request->unit_price[$i]==null){
                    $notification = array(
                        'message' => 'Null value detected',
                        'alert-type' => 'error'
                    );

                    return redirect()->back()->with($notification);
                }else{

                $purchase = new Purchase();
                $purchase->date = date('Y-m-d',strtotime($request->date[$i]));
                $purchase->purchase_no = $request->purchase_no[$i];
                $purchase->supplier_id = $request->supplier_id[$i];
                $purchase->category_id = $request->category_id[$i];
                $purchase->product_id = $request->product_id[$i];
                $purchase->buying_qty = $request->buying_qty[$i];
                $purchase->unit_price = $request->unit_price[$i];
                $purchase->buying_price = $request->buying_price[$i] ;
                $purchase->description = $request->description[$i] ;
                $purchase->created_by = Auth::user()->id;
                $purchase->status = '0' ;
                $purchase->created_at = Carbon::now();

                $purchase->save();

                }
            }

            $notification = array(
                'message' => 'Data saved Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('purchase.all')->with($notification);
        }
    }

    public function DeletePurchase($id){
        Purchase::FindOrFail($id)->delete();

        $notification = array(
            'message' => 'Purchase Product Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function PurchasePending(){
        $allData = Purchase::orderBy('date','desc')->orderBy('id','desc')->where('status','0')->get();
        return view('backend.purchase.purchase_pending',compact('allData'));
    }

    public function PurchaseApprove($id){
        $purchase=Purchase::FindOrFail($id);
        $product=Product::where('id',$purchase->product_id)->first();
        $purchase_qty=((float)($purchase->buying_qty))+((float)($product->quantity));
        $product->quantity = $purchase_qty;

        if($product->save()){
            Purchase::FindOrFail($id)->update([
                'status' => '1',
            ]);

            $notification = array(
                'message' => 'Purchase Approved Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('purchase.all')->with($notification);
        }
    }

    public function DailyPurchaseReport(){
        return view('backend.purchase.daily_purchase_report');
    }

    public function DailyPurchasePdf(Request $request){
        $start_date = date('Y-m-d',strtotime($request->start_date));
        $end_date = date('Y-m-d',strtotime($request->end_date));
        $allData = Purchase::whereBetween('date',[$start_date,$end_date])->where('status','1')->get();
        return view('backend.pdf.daily_purchase_report_pdf',compact('allData','start_date','end_date'));
    }
}
