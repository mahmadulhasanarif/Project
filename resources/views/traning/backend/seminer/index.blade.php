@extends('backend.master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="card"><br><br>
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-7">
                                <h4><b>Seminer Index table</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover datatable datatable-result" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width="7%" scope="col">SL NO</th>
                                        <th width="13%" scope="col">name</th>
                                        <th width="15%" scope="col">category</th>
                                        <th width="15%" scope="col">Email</th>
                                        <th width="15%" scope="col">Address</th>
                                        <th width="15%" scope="col">Number</th>
                                        <th width="10%" scope="col">Created_AT</th>
                                        <th width="10%" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($seminers as $seminer)
                                    <tr>
                                        <th scope="row">{{ $seminers->firstItem()+$loop->index }}</th>
                                        <td>{{ $seminer->name }}</td>
                                        <td>{{ $seminer->course->name }}</td>
                                        <td>{{ $seminer->email }}</td>
                                        <td>{{ $seminer->address }}</td>
                                        <td>{{ $seminer->number }}</td>
                                        <td>{{ Carbon\Carbon::parse($seminer->created_at)->diffforHumans() }}</td>
                                    <td>
                                        <a class="btn btn-danger" href="{{ route('seminer.delete',$seminer->id) }}">
                                            <i class="fa-solid fa-xmark"></i>
                                        </a>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!!$seminers->links()!!}
                        </div>
                    </div>
                </div>
            </div> 
        </div> 
    </div>
</div>
@endsection