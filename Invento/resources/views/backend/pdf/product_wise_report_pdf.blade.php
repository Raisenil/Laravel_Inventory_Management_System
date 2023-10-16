@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Product Wise Stock Report</h4>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-12">
                                <div class="invoice-title">
                                    <h3>
                                        <img src="{{ asset('backend/assets/images/logo-dark.svg') }}" alt="logo" height="100"/>
                                    </h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6">
                                        <address>
                                            <strong>Invento.</strong><br>
                                            Michelina Lock, Christianstad<br>
                                            support@invento.com
                                        </address>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <div class="p-2">
                                        <h3 class="font-size-16"><strong>Item Invoice</strong></h3>
                                    </div>
                                    <div class="">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <td class="text-center"><strong>Supplier Name</strong></td>
                                                    <td class="text-center"><strong>Unit</strong>
                                                    </td>
                                                    <td class="text-center"><strong>Category</strong>
                                                    </td>
                                                    <td class="text-center"><strong>Product Name</strong>
                                                    </td>
                                                    <td class="text-center"><strong>Stock</strong>
                                                    </td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="text-center">{{( $allData['supplier']['name'] )}}</td>
                                                    <td class="text-center">{{( $allData['unit']['name'] )}}</td>
                                                    <td class="text-center">{{( $allData['category']['name'] )}}</td>
                                                    <td class="text-center">{{( $allData->name )}}</td>
                                                    <td class="text-center">{{( $allData->quantity )}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        @php
                                            $date = new DateTime('now',new DateTimeZone('Asia/Dhaka'));
                                        @endphp
                                        <i>Printing Time : {{ $date->format('F j, Y, g:i a') }}</i>

                                        <div class="d-print-none">
                                            <div class="float-end">
                                                <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>

@endsection
