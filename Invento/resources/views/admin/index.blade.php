@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                @php
                                    $customerCount = App\Models\Customer::count();
                                @endphp
                                <p class="text-truncate font-size-14 mb-2">Customers</p>
                                <h4 class="mb-2">{{ $customerCount }}</h4>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-light text-primary rounded-3">
                                    <i class="ri-user-3-line font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                @php
                                    $supplierCount = App\Models\Supplier::count();
                                @endphp
                                <p class="text-truncate font-size-14 mb-2">Suppliers</p>
                                <h4 class="mb-2">{{ $supplierCount }}</h4>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-light text-primary rounded-3">
                                    <i class="ri-archive-line font-size-24" style="color: rgb(88, 201, 88);"></i>
                                </span>
                            </div>
                        </div>
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                @php
                                    $productCount = App\Models\Product::count();
                                @endphp
                                <p class="text-truncate font-size-14 mb-2">Products</p>
                                <h4 class="mb-2">{{ $productCount }}</h4>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-light text-primary rounded-3">
                                    <i class="ri-dropbox-fill font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                @php
                                    $totalBuyingPrice = App\Models\Purchase::where('status', 1)->sum('buying_price');
                                @endphp
                                <p class="text-truncate font-size-14 mb-2">Total Purchase</p>
                                <h4 class="mb-2">{{ $totalBuyingPrice }}</h4>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-light text-primary rounded-3">
                                    <i class="mdi mdi-currency-usd font-size-24" style="color: rgb(88, 201, 88);"></i>
                                </span>
                            </div>
                        </div>
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->

        </div><!-- end row -->


        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-4">All Transactions</h4>

                        <div class="table-responsive">
                            <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                <thead class="table-light">
                                    <tr>
                                        <th>Customer Name</th>
                                        <th>Invoice No</th>
                                        <th>Date</th>
                                        <th>Description</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead><!-- end thead -->
                                <tbody>
                                    @php
                                        $allData = App\Models\Invoice::orderBy('date','desc')->orderBy('id','desc')->where('status','1')->get();
                                    @endphp
                                    @foreach($allData as $item)
                                    <tr>
                                        <td> <h6 class="mb-0">{{( $item['payment']['customer']['name'] )}}</h6></td>
                                        <td>#{{( $item->invoice_no )}}</td>
                                        <td>{{ date('d-m-Y',strtotime($item->date)) }}</td>
                                        <td>{{( $item->description )}}</td>

                                        <td>$ {{( $item['payment']['total_amount'] )}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table> <!-- end table -->
                        </div>
                    </div><!-- end card -->
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>

</div>

@endsection
