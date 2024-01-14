<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

{{-- Font Awesome CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">



    <title>@yield('title')</title>
</head>
<body style="background-color: #F6D8AE ">

{{-- header cinema --}}
@include('partials.header')

{{-- content --}}

<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    @yield('content')
</div>
@guest
    <i class="fas fa-lock m-3 p-3" style="color: #F6D8AE; position: fixed; bottom: 0; right: 0; border: 2px solid #2E4057; border-radius: 50%; background-color: #91283B;"></i>
@endguest
@auth
    @if(!Auth::user()->IsAdmin())
        <i class="fas fa-lock m-3 p-3" style="color: #F6D8AE; position: fixed; bottom: 0; right: 0; border: 2px solid #2E4057; border-radius: 50%; background-color: #91283B;"></i>
    @endif
    @if (Auth::user()->IsAdmin())
        <i class="fas fa-lock-open m-3 p-3" style="color: #F6D8AE; position: fixed; bottom: 0; right: 0; border: 2px solid #2E4057; border-radius: 50%; background-color: #91283B;"></i>

    @endif
@endauth

    {{-- footer --}}
@include('partials.footer')
<!-- Include Bootstrap JS and jQuery -->
<!-- Include Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</body>
</html>
