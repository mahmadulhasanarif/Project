<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <form method="POST" action="" id="addForm">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Option Add page</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="errorMsg"></div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="question-text" class="col-form-label">Question:</label>
                        <select id="question_id" class="form-control">
                            <option selected="">Select Question</option>
                            @foreach ($questions as $question)
                                <option value="{{ $question->id }}">{{ $question->question_text }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message" class="col-form-label">Option:</label>
                        <textarea class="form-control" placeholder="Enter option" id="option_text"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="points" class="col-form-label">Points:</label>
                        <input type="text" class="form-control" id="points" placeholder="Enter points">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="addOption" class="btn btn-primary addOption">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>

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
                                <h4><b>Option Index table</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('quiz_option.store')}}" method="POST">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="question-text" class="col-form-label">Question:</label>
                                <select name="question_id" class="form-control">
                                    <option selected="">Select Question</option>
                                    @foreach ($questions as $question)
                                        <option value="{{ $question->id }}">{{ $question->question_text }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" name="option_text" placeholder="Enter Option Text" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="points" placeholder="Enter Points" class="form-control">
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