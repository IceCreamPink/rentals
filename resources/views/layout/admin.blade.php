<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="website icon" type="png" href="{{ asset('img/icon.png')}}">
    <link rel="stylesheet" href="{{ asset('select2/select2.min.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <nav class="navbar navbar-dark bg-primary">
        </nav> 
        <div class="row">
            <div class="container-fluid">
                <div class="row row-cols-auto">

                    <div class="col-md-2">
                        @include('layout.sidebar')
                    </div>
                    <div class="col-md-10">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('select2/jquery.js') }}"></script>
<script src="{{ asset('select2/select2.min.js') }}"></script>
@yield('script')