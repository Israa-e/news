<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>News</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('../css/bootstrap.min.css') }}" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('../css/font-awesome.css') }}">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="{{ asset('../css/style.css') }}">
</head>
<body>
<!-- HEADER -->
<div id="header">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- LOGO -->
            <div class=" col-md-offset-4 col-md-4">
                <a href={{ route('news-index') }} id="logo"><img src="{{ asset('images/news.jpg') }}"></a>
            </div>
            <!-- /LOGO -->
        </div>
    </div>
</div>
<!-- /HEADER -->
<!-- Menu Bar -->
<div id="menu-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class='menu'>
                    <li><a href={{ route('news-category') }}>Business</a></li>
                    <li><a href={{ route('news-category') }}>Entertainment</a></li>
                    <li><a href={{ route('news-category') }}>Sports</a></li>
                    <li><a href={{ route('news-category') }}>Politics</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /Menu Bar -->
@yield('content')

<!-- Footer -->
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
<!-- /Footer -->
</body>
</html>
