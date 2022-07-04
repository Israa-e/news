<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div id="header">
    <div class="container">
        <div class="row">
            <div class=" col-md-offset-4 col-md-4">
                <a href={{ url('/') }} id="logo"><img src="{{ asset('images/news.jpg') }}" alt=""></a>
                <a class="marg"  href={{ url('/login') }}>login</a>
            </div>
            
        </div>
    </div>
</div>
<div id="menu-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class='menu'>
                    @foreach($Categories as $Category)
                        <li><a href={{url('/?category_id='.$Category->id)}}>{{$Category->name}}</a></li>
                    @endforeach
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
