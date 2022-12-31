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
                                <h4><b>Certificate Edit</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        
                        <form method="POST" action="{{ route('certificate.update', $certificate->id) }}">
                            @csrf

                            <div class="form-group mb-3">
                                <input type="text" value="{{ old('name', $certificate->name) }}" placeholder="Student Name" class="form-control" name="name">
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" value="{{ old('gen_id', $certificate->gen_id) }}" placeholder="Student ID Generate" class="form-control" name="gen_id">
                            </div>
                            
                                <div class="form-group mb-3">
                                    <select class="form-control" name="cat_id">
                                        <option>Select Course</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{$category->id == $certificate->cat_id ? 'selected': ''}}>
                                                {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            
                            
                            <button type="submit" class="btn btn-outline-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div> 
        </div> 
    </div>
</div>
@endsection




