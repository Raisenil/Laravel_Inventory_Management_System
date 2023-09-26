@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Message Details</h4>

                        <div class="row mb-3 mt-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                {{$contact->name}}
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3 mt-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                {{$contact->email}}
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3 mt-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Subject</label>
                            <div class="col-sm-10">
                                {{$contact->subject}}
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3 mt-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                {{$contact->phone}}
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3 mt-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">message</label>
                            <div class="col-sm-10">
                                {{$contact->message}}
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3 mt-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Date</label>
                            <div class="col-sm-10">
                                {{Carbon\Carbon::parse($contact->created_at)->diffForHumans()}}
                            </div>
                        </div>
                        <!-- end row -->

                    </div>
                </div>
            </div> <!-- end col -->
        </div>

    </div>
</div>

@endsection