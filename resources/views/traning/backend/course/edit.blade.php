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
                                <h4><b>Course Update </b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('course.update', $course->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="old_image" value="{{ $course->image }}">

                            <div class="form-group mb-3">
                                <select name="cat_id" class="form-control">
                                    <option selected="">select category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{$category->id == $course->cat_id ? 'selected': ''}}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" name="name" value="{{old('name', $course->name)}}" placeholder="Enter Course name" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" name="title" value="{{old('title', $course->title)}}" placeholder="Enter Course title" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" name="price" value="{{old('price', $course->price)}}" placeholder="Enter Course price" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <textarea class="form-control" placeholder="Enter sort description" name="description">{{old('description', $course->description)}}</textarea>
                            </div>

                            <div class="form-group">
                                <img src="{{asset($course->image)}}" width="200px" height="100px">
                            </div>

                            <div class="form-group mb-3">
                                <input type="file" class="form-control" name="image" placeholder="Enter course image">
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