@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Add Purchase</h4><br>
                        
                        <div class="row">

                            <div class="col-md-4">
                                <div class="md-3">

                                    <label for="example-text-input" class="form-label" style="padding-top: 10px;">Date</label>
                                    
                                    <input class="form-control" name="date" type="date" id="date">

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="md-3">

                                    <label for="example-text-input" class="form-label" style="padding-top: 10px;">Purchase No</label>
                                    
                                    <input class="form-control" name="purchase_no" type="text" id="purchase_no">

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="md-3">

                                    <label for="example-text-input" class="form-label" style="padding-top: 10px;">Supplier Name</label>
                                    
                                    <select name="supplier_id" id="supplier_id" class="form-select" aria-label="Default select example">
                                    <option selected="">Open this select menu</option>
                                    @foreach($supplier as $supp)
                                    <option value="{{$supp->id}}">{{$supp->name}}</option>
                                    @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="md-3">

                                    <label for="example-text-input" class="form-label" style="padding-top: 10px;">Category Name</label>
                                    
                                    <select name="category_id" id="category_id" class="form-select" aria-label="Default select example">
                                    <option selected="">Open this select menu</option>
                                    

                                    </select>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="md-3">

                                    <label for="example-text-input" class="form-label" style="padding-top: 10px;">Product Name</label>
                                    
                                    <select name="product_id" id="product_id" class="form-select" aria-label="Default select example">
                                    <option selected="">Open this select menu</option>
                                    
                                    
                                    </select>

                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="md-3">

                                    <label for="example-text-input" class="form-label" style="margin-top: 50px;"> </label>

                                    <input type="submit" class="btn btn-secondary waves-effect waves-light" value="Add More">
                                    

                                </div>
                            </div>

                        </div><!-- end row -->
                        








                    </div> <!--  end card body -->
                </div>
            </div> <!-- end col -->
        </div>

    </div>
</div>
@endsection