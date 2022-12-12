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
                                <marquee class="text-danger"><h4><b>Result Index table</b></h4></marquee>
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
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover datatable datatable-result" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width="10">
        
                                        </th>
                                        <th width="10%">No</th>
                                        <th width="15%">User</th>
                                        <th width="35%">Questions</th>
                                        <th width="10%">Points</th>
                                        <th width="15%">Created_AT</th>
                                        <th width="15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($results as $result)
                                    <tr data-entry-id="{{ $result->id }}">
                                        <td>
        
                                        </td>
                                        <td>{{ $results->firstItem()+$loop->index }}</td>
                                        <td>{{ $result->user->name }}</td>
                                        <td>
                                            @foreach($result->questions as $key => $question)
                                                <span>{{ $question->question_text }}</span>
                                            @endforeach
                                        </td>
                                        <td>{{ $result->total_points }}</td>
                                        <td>{{ Carbon\Carbon::parse($result->created_at)->diffForHumans() }}</td>
                                   
                                            <td>

                                                <button type="button" class="btn btn-info">
                                                    <a href="{{route('quiz.result.show',$result->id)}}"><i class="fa-solid fa-eye"></i></a>
                                                </button>
                                                
                                                <form onclick="return confirm('are you sure ? ')" class="d-inline" action="{{url('quiz/result/'.$result->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button>
                                                </form>
                                            </td>
                                        
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7" class="text-center">{{ __('Data Empty') }}</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {!!$results->links()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
         crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    </html>
    </x-app-layout>