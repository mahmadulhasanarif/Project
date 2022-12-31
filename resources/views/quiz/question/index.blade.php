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
                                <h4><b>Question Index table</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover datatable datatable-result" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th scope="col">SL NO</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Question</th>
                                        <th scope="col">Created_AT</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($questions as $question)
                            <tr>
                            <th scope="row">{{ $questions->firstItem()+$loop->index }}</th>
                            <td>{{ $question->Category->name }}</td>
                            <td>{{ $question->question_text }}</td>
                            <td>{{ Carbon\Carbon::parse($question->created_at)->diffforHumans() }}</td>
                            <td>
                                <a href="{{route('quiz_question.edit', $question->id)}}" class="btn btn-success">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="{{route('quiz_question.delete', $question->id)}}"  class="btn btn-danger">
                                    <i class="fa-solid fa-xmark"></i>
                                </a>
                            </td>
                            </tr>
                            @endforeach
                                </tbody>
                            </table>
                            {!!$questions->links()!!}
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-lg-3">
                <a href="{{route('quiz_question.create')}}" class="btn btn-success">Add Question</a>
            </div>
        </div> 
    </div>
</div>
@endsection