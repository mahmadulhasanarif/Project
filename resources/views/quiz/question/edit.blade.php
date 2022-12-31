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
                                <h4><b>Question Edit table</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('quiz_question.update', $question->id)}}" method="POST">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="category" class="col-form-label">Category:</label>
                                <select name="category_id" class="form-control">
                                    <option selected="">Select category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{$category->id == $question->category_id ? 'selected': ''}}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" value="{{old('question_text', $question->question_text)}}" name="question_text" placeholder="Enter Question Text" class="form-control">
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