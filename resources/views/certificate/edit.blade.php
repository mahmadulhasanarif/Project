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
    
        <title>Certificate Verification</title>
      </head>
      <body>
    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form method="POST" action="{{ route('certificate.update', $certificate->id) }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label"><b>Studnet Name</b></label>
                            <input type="text"  class="form-control @error('name') is-invalid @else is-valid @enderror" name="name" value="{{ old('name', $certificate->name) }}">
                            @error('name')
                                <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label"><b>ID Gen</b></label>
                            <input type="text"  class="form-control @error('gen_id') is-invalid @else is-valid @enderror" name="gen_id" value="{{ old('gen_id', $certificate->gen_id) }}">
                            @error('gen_id')
                                <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label"><b>Category Name</b></label>
                            <select class="form-control @error('cat_id') is-invalid @enderror" name="cat_id">
                                <option disabled>Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $certificate->cat_id ? 'selected': '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
</x-app-layout>