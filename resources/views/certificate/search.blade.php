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
          <div class="container-fluid">
            <div class="row mt-5">
              <div class="col-md-4"></div>
                <div class="col-md-4">
                  <form action="{{route('certificate.verified')}}" method="GET">
                    <input type="text" name="gen_id" placeholder="Your Certificate Number" required>
                    <button type="submit" class="btn btn-success">Verify </button>
                  </form>
              </div>
              <div class="col-md-4"></div>
            </div>
          </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      </body>
    </html>
    </x-app-layout>