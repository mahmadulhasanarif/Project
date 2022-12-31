@extends('backend.master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <div class="card"><br><br>
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-7">
                                <h4><b>Blog Create</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.blog.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mb-3">
                                <input type="text" name="title" placeholder="Enter Blog Title" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <textarea class="form-control" placeholder="Enter sort description" name="sort_desc"></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <textarea class="form-control" placeholder="Enter Long description" name="long_desc"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <input type="file" class="form-control" name="image" placeholder="Enter image">
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-1"><input type="submit" class="btn btn-info waves-effect waves-light" value="Submit"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
        </div> 
    </div>
</div>
@endsection