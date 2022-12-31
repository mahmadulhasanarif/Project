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
                                <h4><b>Result Index table</b></h4>
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
    </div>
</div>
@endsection