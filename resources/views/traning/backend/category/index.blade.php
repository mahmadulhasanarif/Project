@extends('backend.master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-9">
                <div class="card"><br><br>
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-7">
                                <h4><b>Course Category table</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover datatable datatable-result" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width="10%" scope="col">SL NO</th>
                                        <th width="20%" scope="col">Name</th>
                                        <th width="15%" scope="col">Image</th>
                                        <th width="10%" scope="col">Created_AT</th>
                                        <th width="15%" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                    <tr>
                                        <th scope="row">{{ $categories->firstItem()+$loop->index }}</th>
                                        <td>{{ $category->name }}</td>
                                        <td><img src=" {{asset($category->image)}}" width="70px" height="50px"></td>
                                        <td>{{ Carbon\Carbon::parse($category->created_at)->diffforHumans() }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('course.category.edit', $category->id) }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>

                                        <a class="btn btn-danger" href="{{ route('course.category.delete',$category->id) }}">
                                            <i class="fa-solid fa-xmark"></i>
                                        </a>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!!$categories->links()!!}
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-lg-2">
                <a href="{{route('course.category.create')}}" class="btn btn-success" >Add Category</a>
                </div>
        </div> 
    </div>
</div>
@endsection