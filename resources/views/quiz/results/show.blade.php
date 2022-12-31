@extends('backend.master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header py-3 d-flex">
                        <h6 class="m-0 font-weight-bold text-primary">
                        Total points: {{ $result->total_points }} points
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
                            <thead>
                                    <tr>
                                        <th>Question Text</th>
                                        <th>Points</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($result->questions as $question)
                                        <tr>
                                            <td>{{ $question->question_text }}</td>
                                            <td>{{ $question->pivot->points }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-lg-2">
                    <a style="float: right" href="{{ route('admin.results.index') }}" class="btn btn-primary">
                        <span class="text">{{ __('Go Back') }}</span>
                    </a>
            </div>
        </div> 
    </div>
</div>
@endsection