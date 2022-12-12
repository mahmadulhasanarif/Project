<x-app-layout>

    <!doctype html>
        <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

            <title>Laravel Quiz</title>
        </head>
        <body>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                <!-- Content Row -->
                        <div class="card shadow">
                            <div class="card-header">
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h1 class="h3 mb-0 text-gray-800">{{ __('create result') }}</h1>
                                    <a href="{{ route('quiz.result.index') }}" class="btn btn-primary btn-sm shadow-sm" >{{ __('Go Back') }}</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{route('quiz.result.update', $result->id)}}" method="POST">
                                    @csrf
                                    @method('put')
                                    <div class="form-group">
                                        <label for="question">{{ __('question') }}</label>
                                        <select class="form-control" name="questions[]" multiple id="question">
                                            @foreach($questions as $id => $question)
                                                <option {{ (in_array($id, old('questions', [])) || isset($result) && $result->questions->contains($id)) ? 'selected' : '' }} value="{{ $id }}">{{ $question }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="total_points">{{ __('total_points') }}</label>
                                        <input type="number" class="form-control" id="total_points" placeholder="{{ __('total_points') }}" name="total_points" value="{{ old('total_points', $result->total_points) }}" />
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">{{ __('Save')}}</button>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>
    </html>

</x-app-layout>

