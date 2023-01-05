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
                                <h4><b>Lesson Show table</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover datatable datatable-result" cellspacing="0" width="100%">
                                <tr>
                                    <th>ID</th>
                                    <td>{{$lesson->id}}</td>
                                </tr>
                                <tr>
                                    <th>Course</th>
                                    <td>{{$lesson->course->name}}</td>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <td>{{$lesson->title}}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{$lesson->description}}</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>{{$lesson->video_url}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-lg-2">
                <a href="{{route('lesson.index')}}" class="btn btn-success" >Back To Lesson</a>
                </div>
        </div> 
    </div>
</div>
@endsection