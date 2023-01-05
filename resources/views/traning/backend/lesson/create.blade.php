@extends('backend.master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-6">
                <div class="card"><br><br>
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-7">
                                <h4><b>Lesson Create</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('lesson.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mb-3">
                                <select name="course_id" class="form-control">
                                    <option selected="">select course</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" name="title" placeholder="Enter lesson title" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" name="video_url" placeholder="Enter video" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <textarea class="form-control" placeholder="Enter description" name="description"></textarea>
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