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
                                    <th scope="col">SL NO</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">support</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($contacts as $contact)
                                  <tr>
                                    <th scope="row">{{ $contacts->firstItem()+$loop->index }}</th>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->support }}</td>
                                    <td>{{ $contact->message }}</td>
                                    <td>
                                        <a href="{{route('contact.delete', $contact->id)}}" id="deleteButton" class="btn btn-danger ">
                                          <i class="fa-solid fa-xmark"></i>
                                        </a>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                            </table>
                            {!!$contacts->links()!!}
                        </div>
                    </div>
                </div>
            </div> 
        </div> 
    </div>
</div>
@endsection