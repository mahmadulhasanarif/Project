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
                            <div class="col-md-7">
                                <h4><b>Category Index table</b></h4>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-3 my-1"><b class="text-success">Search:</b></div>
                                    <div class="col-md-9"><input type="text" id="search" class="form-control" placeholder="Enter search here.."></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">SL NO</th>
                                <th scope="col">Name</th>
                                <th scope="col">Created_AT</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                <th scope="row">{{ $categories->firstItem()+$loop->index }}</th>
                                <td>{{ $category->name }}</td>
                                <td>{{ Carbon\Carbon::parse($category->created_at)->diffforHumans() }}</td>
                                <td>
                                    <a href="{{route('quiz_category.edit',$category->id)}}" class="btn btn-success updateButton">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="{{route('quiz_category.delete', $category->id)}}" class="btn btn-danger">
                                        <i class="fa-solid fa-xmark"></i>
                                    </a>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                            {{ $categories->links() }}
                    </div>
                </div>
            </div> 
            <div class="col-lg-3"><a href="{{route('quiz_category.create')}}" class="btn btn-success">Add Category</a></div>
        </div> 
    </div>
</div>
@endsection