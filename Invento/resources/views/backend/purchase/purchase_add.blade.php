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

                                    <i class="btn btn-secondary waves-effect waves-light fas fa-plus-circle addeventmore" style="margin-top: 10px;"> <span style="font-family: sans-serif; font-weight: normal;"> Add More</span></i>

                                </div>
                            </div>

                        </div><!-- end row -->

                    </div> <!--  end card body -->

                    <div class="card-body">
                        <form method="" action="">
                            @csrf

                            <table class="table-sm table-bordered" width="100%" style="border-color: #ddd;">
                                <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th>Product Name</th>
                                        <th>PSC/KG</th>
                                        <th>Unit Price</th>
                                        <th>Description</th>
                                        <th>Total Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                
                                <tbody id="addRow" class="addRow">

                                </tbody>

                                <tbody>
                                    <tr>
                                        <td colspan="5"></td>
                                        <td>
                                            <input type="text" name="estimated_amount" value="0" id="estimated_amount" class="form-control estimated_amount" readonly style="background-color:#ddd;">
                                        </td>

                                        <td>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info" id="storeButton">Add Purchase</button>
                            </div>
                        </form>
                    </div><!--  end card body -->


                </div>
            </div> <!-- end col -->
        </div>

    </div>
</div>


<!-- For interactive table -->
<script id="document-template" type="text/x-handlebars-template">
    
    <tr class="delete_add_more_item" id="delete_add_more_item">
        <input type="hidden" name="date[]" value="@{{date}}">
        <input type="hidden" name="purchase_no[]" value="@{{purchase_no}}">
        <input type="hidden" name="supplier_id[]" value="@{{supplier_id}}">

        <td>
            <input type="hidden" name="category_id[]" value="@{{category_id}}">
            @{{category_name}}
        </td>

        <td>
            <input type="hidden" name="product_id[]" value="@{{product_id}}">
            @{{product_name}}
        </td>

        <td>
            <input type="number" min="1" class="from-control buying_qty text-right" name="buying_qty[]" value="">
        </td>

        <td>
            <input type="number" class="from-control unit_price text-right" name="unit_price[]" value="">
        </td>

        <td>
            <input type="text" class="from-control" name="description[]" value="">
        </td>

        <td>
        <input type="number" class="from-control buying_price text-right" name="buying_price[]" value="0" readonly>
        </td>

        <td>
            <i class="btn btn-danger btn-sm fas fa-window-close removeeventmore"></i>
        </td>
    </tr>

</script>

<script type="text/javascript">
    $(document).ready(function(){
        $(document).on("click",".addeventmore",function(){
            var date = $('#date').val();
            var purchase_no = $('#purchase_no').val();
            var supplier_id = $('#supplier_id').val();
            var category_id = $('#category_id').val();
            var category_name = $('#category_name').find('option:selected').text();
            var product_id = $('#product_id').val();
            var product_name = $('#product_id').find('option:selected').text();

            // validation check
            if(date == ''){
                // PM9 12 M
            }
        })
    })
</script>



<!-- Scripts for selecting Supplier name,Category Name & Product Name -->
<script type="text/javascript">
    $(function(){
        $(document).on('change','#supplier_id',function(){
            var supplier_id = $(this).val();
            $.ajax({
                url:"{{route('get-category')}}",
                type:"GET",
                data:{supplier_id:supplier_id},
                success:function(data){
                    var html = '<option value="">Select Category</option>';
                    $.each(data,function(key,v){
                        html += '<option value=" '+v.category_id+' ">'+v.category.name+'</option>';
                    });
                    $('#category_id').html(html);
                }
            })
        });
    });
</script>

<script type="text/javascript">
    $(function(){
        $(document).on('change','#category_id',function(){
            var category_id = $(this).val();
            $.ajax({
                url:"{{route('get-product')}}",
                type:"GET",
                data:{category_id:category_id},
                success:function(data){
                    var html = '<option value="">Select Product</option>';
                    $.each(data,function(key,v){
                        html += '<option value=" '+v.id+' ">'+v.name+'</option>';
                    });
                    $('#product_id').html(html);
                }
            })
        });
    });
</script>

@endsection