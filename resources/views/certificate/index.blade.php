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
                                <h4><b>Contact Index table</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover datatable datatable-result" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width="10%" scope="col">SL NO</th>
                                        <th width="20%" scope="col">Name</th>
                                        <th width="25%" scope="col">CATEGORY</th>
                                        <th width="20%" scope="col">Generate ID</th>
                                        <th width="25%" scope="col"><b>Action</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($certificates as $certificate)
                                    <tr>
                                    <th scope="row">{{ $certificates->firstItem()+$loop->index }}</th>
                                    <td>{{ $certificate->name }}</td>
                                    <td>{{ $certificate->Category->name }}</td>
                                    <td>{{ $certificate->gen_id }}</td>
                                    <td>
                                        <a class="btn btn-danger" href="{{ url('certificate/verify/'.$certificate->id) }}"><i class="fa-solid fa-eye"></i></a>
                                        <a class="btn btn-primary" href="{{ url('certificate/'.$certificate->id.'/edit') }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a class="btn btn-danger" href="{{ route('certificate.delete',$certificate->id) }}"><i class="fa-solid fa-xmark"></i></a>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!!$certificates->links()!!}
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-lg-2">
                <a class="btn btn-success" href="{{route('certificate.create')}}">Certificate Add</a>
            </div>
        </div> 
    </div>
</div>
@endsection