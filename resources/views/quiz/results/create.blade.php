
@extends('backend.master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">{{ __('create result') }}</h1>
                            <a href="{{ route('quiz.result.index') }}" class="btn btn-primary btn-sm shadow-sm" >{{ __('Go Back') }}</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('quiz.result.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="question">{{ __('question') }}</label>
                                <select class="form-control" name="questions[]" multiple id="question">
                                    @foreach($questions as $id => $question)
                                        <option value="{{ $id }}">{{ $question }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-2">
                                <label for="total_points">{{ __('total_points') }}</label>
                                <input type="number" class="form-control" id="total_points" placeholder="{{ __('total_points') }}" name="total_points" value="{{ old('total_points') }}" />
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">{{ __('Submit') }}</button>
                        </form>
                    </div>

                </div>
            </div> 
        </div> 
    </div>
</div>
@endsection