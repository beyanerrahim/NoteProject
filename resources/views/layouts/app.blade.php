<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.bundle.min.js') }}">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> --}}

    <link rel="stylesheet" href="{{asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/style.css') }}">

    <title>@yield('title')</title>
</head>
<body>

    <nav class="navbar">
        <ul class="navbar-links">
        <li ><a class="boldline" href="#">NOTEBOOK</a></li>
        <li><a href="{{route('home')}}">All Notes</a></li>
        </ul>
       
       
        <div class="" style="color: #fff">
            Welcome {{ Auth::user()->name }}
        </div>
       <div class="create-note">
            <a class="btn btn-outline-light btn-style" href="{{route('createNote')}}"><span><i class="fas fa-plus"></i> Add Your Note </span></a>
       
       </div>
        <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
            @csrf
            @method('DELETE')

           
            <button class="btn btn-danger" style="width:100px;" type="submit">Logout</button>
        </form>

       
    
    </nav>
    



    @yield('content')





    <script src="js/jquery-3.7.1.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/all.min.js"></script>
</body>
</html>