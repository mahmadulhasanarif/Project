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
                                <h4><b>Lesson Update </b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('lesson.update', $lesson->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mb-3">
                                <select name="course_id" class="form-control">
                                    <option selected="">select course</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}" {{$course->id == $lesson->course_id ? 'selected': ''}}>{{ $course->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" name="title" value="{{old('title', $lesson->title)}}" placeholder="Enter Course title" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" name="video_url" value="{{old('video_url', $lesson->video_url)}}" placeholder="Enter Video" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <textarea class="form-control" placeholder="Enter description" name="description">{{old('description', $lesson->description)}}</textarea>
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