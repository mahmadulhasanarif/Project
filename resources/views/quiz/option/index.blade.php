<x-app-layout>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 9 and Ajax Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    
</head>
  <body>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-7">
                            <marquee class="text-danger"><h4><b>Option Index table</b></h4></marquee>
                        </div>
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-md-3 my-1"><b class="text-success">Search:</b></div>
                                <div class="col-md-9"><input type="text" id="search" class="form-control" placeholder="Enter search here.."></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th width="10%" scope="col">SL NO</th>
                            <th width="25%" scope="col">Question</th>
                            <th width="25%" scope="col">Option</th>
                            <th width="10%" scope="col">Points</th>
                            <th width="15%" scope="col">Created_AT</th>
                            <th width="15%" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($options as $option)
                            <tr>
                            <th scope="row">{{ $options->firstItem()+$loop->index }}</th>
                            <td>{{ $option->Question->question_text }}</td>
                            <td>{{ $option->option_text }}</td>
                            <td>{{ $option->points }}</td>
                            <td>{{ Carbon\Carbon::parse($option->created_at)->diffforHumans() }}</td>
                            <td>
                                <button type="button" class="btn btn-success updateButton"
                                data-bs-toggle="modal" data-bs-target="#updateModal"
                                data-id = "{{ $option->id }}",
                                data-question_id = "{{ $option->question_id }}",
                                data-option_text= "{{ $option->option_text }}",
                                data-points = "{{ $option->points }}">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button type="button" id="deleteButton" class="btn btn-danger deleteButton"
                                data-id={{ $option->id }} ><i class="fa-solid fa-xmark"></i></button>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        {{ $options->links() }}
                </div>
            </div>
        </div>
    <div class="col-md-2 mt-3"><button type="submit" class="btn btn-success addModalButton" data-bs-toggle="modal" data-bs-target="#addModal">Add Option</button></div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    @include('quiz.option.script')
    @include('quiz.option.addModal')
    @include('quiz.option.editModal')
    {!! Toastr::message() !!}
</body>
</html>
</x-app-layout>