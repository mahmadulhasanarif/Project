<html>
    <head>
        <style>
            
            body, html {
                margin: 0;
                padding: 0;
            }
            body {
                color: black;
                display: table;
                font-family: Georgia, serif;
                font-size: 24px;
                text-align: center;
            }
            .container {
                border: 20px solid tan;
                width: 1200px;
                height: 800px;
                display: table-cell;
                vertical-align: middle;
            }
            .logo {
                color: tan;
                font-size: 35px;
            }

            .marquee {
                color: tan;
                font-size: 40px;
                margin: 20px;
            }
            .assignment {
                margin: 20px;
            }
            .person {
                border-bottom: 2px solid black;
                font-size: 32px;
                font-style: italic;
                margin: 20px auto;
                width: 600px;
            }
            .reason {
                margin: 20px;
            }

        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Certificate Verification</title>
    </head>
    <body>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    <div class="container">
                        <div>
                            <img src="https://img.freepik.com/free-photo/3d-render-sunglasses-shopping-cart-illustration-design_460848-6286.jpg?w=1380&t=st=1670939406~exp=1670940006~hmac=17adcdc816b9ac04ead1e449cbfa381d92b1a5ea030e3b0018e136c45b5acd36" width="100px" height="80px">

                        </div>
                        <div class="logo">
                            An Orgination
                        </div>
            
                        <div class="marquee">
                            Communication IT Certificate
                        </div>
            
            
                        <div class="person">
                            {{$certificate->name}}
                        </div>
            
                        <div class="reason">
                           <b>Professional {{$certificate->Category->name}}</b>
                        </div>
                        <div>
                            <b>Awared On {{$certificate->created_at}}</b>
                        </div>
                        <br>
                        <div>
                            <b>Certificate Code: {{ $certificate->gen_id }}</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>