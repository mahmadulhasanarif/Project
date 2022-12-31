@extends('backend.master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="card"><br><br>
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-7">
                                <h4><b>Blog Index table</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover datatable datatable-result" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width="10%" scope="col">SL NO</th>
                                        <th width="20%" scope="col">Title</th>
                                        <th width="30%" scope="col">Sort Desc</th>
                                        <th width="15%" scope="col">Image</th>
                                        <th width="10%" scope="col">Created_AT</th>
                                        <th width="15%" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $blog)
                                    <tr>
                                        <th scope="row">{{ $blogs->firstItem()+$loop->index }}</th>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->sort_desc }}</td>
                                        <td><img src=" {{asset($blog->image)}}" width="70px" height="50px"></td>
                                        <td>{{ Carbon\Carbon::parse($blog->created_at)->diffforHumans() }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('admin.blog.edit', $blog->id) }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>

                                        <a class="btn btn-danger" href="{{ route('admin.blog.delete',$blog->id) }}">
                                            <i class="fa-solid fa-xmark"></i>
                                        </a>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!!$blogs->links()!!}
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-lg-1">
                <a href="{{route('admin.blog.create')}}" class="btn btn-success" >Add Blog</a>
                </div>
        </div> 
    </div>
</div>
@endsection