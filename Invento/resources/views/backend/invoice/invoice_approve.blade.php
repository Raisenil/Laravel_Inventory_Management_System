@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Invoice Approve</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        @php
            $payment = App\Models\Payment::where('invoice_id',$invoice->id)->first();
        @endphp


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                    <a href="{{route('invoice.pending')}}" class="btn btn-secondary waves-effect waves-light" style="float:right;"><i class="fa fa-list"> <span style="font-family: sans-serif; font-weight: normal;">Pending Invoice List</span></i></a>
                    <br><br>

                    <h4>Invoice No:#{{ $invoice->invoice_no }} - {{ date('d-m-Y',strtotime($invoice->date)) }}</h4>
                    <br><br>

                    <table class="table mb-0" width="100%">
                        <thead>
                            <tr>
                                <th><p>Customer Info</p></th>
                                <th><p>Name: <strong>{{ $payment['customer']['name'] }}</strong></p></th>
                                <th><p>Mobile: <strong>{{ $payment['customer']['mobile_no'] }}</strong></p></th>
                                <th><p>Email: <strong>{{ $payment['customer']['email'] }}</strong></p></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td colspan="3">
                                    <p>Description: <strong>{{ $invoice->description }}</strong></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <form action="">
                        <table border="1" class="table mb-0" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">SL</th>
                                    <th class="text-center">Category</th>
                                    <th class="text-center">Product Name</th>
                                    <th class="text-center">Current Stock</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-center">Unit Price</th>
                                    <th class="text-center">Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $total_sum='0'
                                @endphp

                                @foreach($invoice['invoice_details'] as $key => $details)
                                <tr>
                                    <td class="text-center">{{ $key+1 }}</td>
                                    <td class="text-center">{{ $details['category']['name'] }}</td>
                                    <td class="text-center">{{ $details['product']['name'] }}</td>
                                    <td class="text-center">{{ $details['product']['quantity'] }}</td>
                                    <td class="text-center">{{ $details->selling_qty }}</td>
                                    <td class="text-center">{{ $details->unit_price }}</td>
                                    <td class="text-center">{{ $details->selling_price }}</td>
                                </tr>
                                @php
                                $total_sum += $details->selling_price
                                @endphp
                                @endforeach
                                <tr>
                                    <td colspan="6">Sub Total</td>
                                    <td>{{ $total_sum }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->


    </div> <!-- container-fluid -->
</div>

@endsection
