<x-app-layout>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
     integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Certificate Verification</title>
  </head>
  <body>
    <div class="py-12">
        <div class="container mt-4">
            <a class="btn btn-success" href="{{route('certificate.search')}}"> Certificate Check</a>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                @if (session('message'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                <table class="table">
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
                                {{ $certificates->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                            <form method="POST" action="{{ route('certificate.store') }}">
                                @csrf
                            
                                <div class="form-group">
                                    <label class="form-label"><b>Student Name</b></label>
                                    <input type="text" class="form-control @error('name') is-invalid @else is-valid @enderror" name="name">
                                    @error('name')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label"><b>Genertate ID</b></label>
                                    <input type="text" class="form-control @error('gen_id') is-invalid @else is-valid @enderror" name="gen_id">
                                    @error('gen_id')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                
                                    <div class="form-group mb-3">
                                        <label class="form-label"><b>Category Name</b></label>
                                        <select class="form-control @error('cat_id') is-invalid @enderror" name="cat_id">
                                            <option disabled>Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">
                                                    {{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                
                                
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
</x-app-layout>