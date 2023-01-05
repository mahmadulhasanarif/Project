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
                                <h4><b>Lesson Index table</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover datatable datatable-result" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width="10%" scope="col">SL NO</th>
                                        <th width="15%" scope="col">Course</th>
                                        <th width="20%" scope="col">Title</th>
                                        <th width="30%" scope="col">Description</th>
                                        <th width="10%" scope="col">Created_AT</th>
                                        <th width="15%" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lessons as $lesson)
                                    <tr>
                                        <th scope="row">{{ $lessons->firstItem()+$loop->index }}</th>
                                        <td>{{ $lesson->course->name }}</td>
                                        <td>{{ $lesson->title }}</td>
                                        <td>{{ $lesson->description }}</td>
                                        <td>{{ Carbon\Carbon::parse($lesson->created_at)->diffforHumans() }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('lesson.edit', $lesson->id) }}">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>

                                        <a class="btn btn-info" href="{{ route('lesson.show',$lesson->id) }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a class="btn btn-danger" href="{{ route('lesson.delete',$lesson->id) }}">
                                            <i class="fa-solid fa-xmark"></i>
                                        </a>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!!$lessons->links()!!}
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-lg-1">
                <a href="{{route('lesson.create')}}" class="btn btn-success" >Add Lesson</a>
                </div>
        </div> 
    </div>
</div>
@endsection