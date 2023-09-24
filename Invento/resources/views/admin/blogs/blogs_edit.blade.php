@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


<style type="text/css">
    .bootstrap-tagsinput .tag {
    margin-right: 5px;
    color: #fff;
    background-color: #337ab7;
    padding: 3px 6px;
    border: 1px solid #2e6da4;
    border-radius: 4px;
    font-weight: bold;
    cursor: pointer;
}

/* Optional: Style on hover */
.bootstrap-tagsinput .tag:hover {
    background-color: #286090;
}

</style>



<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Edit Blog Page</h4>
                        
                        <form method="post" action="{{ route('update.blog',$blogs->id) }}" enctype="multipart/form-data">
                            @csrf

                        <div class="row mb-3 mt-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Blog Category Name</label>
                            <div class="col-sm-10">
                                <select name="blog_category_id" class="form-select" aria-label="Default select example">
                                    @foreach($categories as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $blogs->blog_category_id  ? 'selected' : ''}}>{{$item->blog_category}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3 mt-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Blog Title</label>
                            <div class="col-sm-10">
                                <input name="blog_title" class="form-control" type="text" value="{{ $blogs->blog_title }}" id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3 mt-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Blog Tags</label>
                            <div class="col-sm-10">
                                <input name="blog_tags"  class="form-control" type="text" value="{{ $blogs->blog_tags }}" data-role="tagsinput">
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3 mt-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Blog Description</label>
                            <div class="col-sm-10">
                            <textarea id="elm1" name="blog_description">{{ $blogs->blog_description }}</textarea>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3 mt-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Blog Image</label>
                            <div class="col-sm-10">
                                <input name="blog_image" class="form-control" type="file" id="image">
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3 mt-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                            <img id="showImage" class="rounded avatar-lg" src="{{ asset($blogs->blog_image) }}" alt="Card image cap">
                            </div>
                        </div>
                        <!-- end row -->

                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Blog Data">

                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>

    </div>
</div>


<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection