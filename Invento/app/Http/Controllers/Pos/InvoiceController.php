<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Supplier;
use App\Models\Product;
use App\Models\Unit;
use App\Models\Category;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use App\Models\Payment;
use App\Models\PaymentDetail;
use App\Models\Customer;
use Auth;
use Illuminate\Support\Carbon;

class InvoiceController extends Controller
{
    public function InvoiceAll(){
        // $allData = Purchase::orderBy('date','desc')->orderBy('id','desc')->get();
        // return view('backend.purchase.purchase_all',compact('allData'));
    } 
}