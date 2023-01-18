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
                                <h4><b>Search Here</b></h4>
                            </div>
                        </div>
                    </div>
                   <div class="card-body">
                   <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                      <form action="{{route('certificate.verified')}}" method="GET">
                        <div class="row">
                          <div class="col-lg-8">
                            <input type="text" name="gen_id" class="form-control" placeholder="Your Certificate Number" required>
                          </div>
                          <div class="col-lg-4">
                            <button type="submit" class="btn btn-success">Verify </button>
                          </div>
                        </div>
                        
                        
                      </form>
                    </div>
                    <div class="col-lg-3"></div>
                   </div>
                   </div>
                    </div>
                </div>
            </div> 
        </div> 
    </div>
</div>
@endsection




