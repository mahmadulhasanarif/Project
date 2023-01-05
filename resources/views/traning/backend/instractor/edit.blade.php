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
                                <h4><b>Instractor Update </b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('instractor.update', $instractor->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="old_image" value="{{ $instractor->image }}">
                            <div class="form-group mb-3">
                                <input type="text" name="name" value="{{ old('name', $instractor->name) }}" placeholder="Enter name" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" name="subject" value="{{ old('subject', $instractor->subject) }}" placeholder="Enter subject" class="form-control">
                            </div>

                            <div class="form-group">
                                <img src="{{asset($instractor->image)}}" width="200px" height="100px">
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