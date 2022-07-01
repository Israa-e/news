<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN Panel</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div id="header-admin">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <a href={{url('admin')}}><img class="logo" src="{{ asset('images/news.jpg') }}" alt=""></a>
                </div>
                <div class="col-md-offset-9  col-md-1">
                    <a class="admin-logout" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{__('Logout')}}</a>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
    <div id="admin-menubar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <ul class="admin-menu">
                        <li>
                            <a href={{ route('admin.home') }}>Home</a>
                        </li>
                        <li>
                            <a href={{ route('posts.index') }}>Post</a>
                        </li>
                        <li>
                            <a href={{ route('categories.index') }}>Category</a>
                        </li>
                        <li>
                            <a href={{ route('users.index') }}>Users</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@yield('content')
<div id ="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span>© Copyright @php
                    echo date('Y');
                @endphp News | Powered by <a href="https://github.com/Israa-e">Israa Elhalaby</a></span>
            </div>
        </div>
    </div>
</div>
</body>
</html>
