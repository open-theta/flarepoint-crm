<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>FlarePoint</title>
{{-- 
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
 --}}
    <!-- Styles -->
    {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">

   {{--  <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style> --}}
</head>
<body id="app-layout">
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2 my-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 mx-auto">
                            <img src="{{ asset('images/FP_logo_big.png') }}" class="img-fluid" alt="Flarepoint CRM">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

</div>

<!-- JavaScripts -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> --}}
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> --}}
<script src="{{ elixir('js/app.js') }}"></script>

</body>
</html>
