@extends('frontend.layout.header')
@section('content')
<div id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                  <!-- post-container -->
                    <div class="post-container">
                        <div class="post-content single-post">
                            <h3>{{$Posts->title}}</h3>
                            <div class="post-information">
                                <span>
                                    <i class="fa fa-tags" aria-hidden="true"></i>
                                    {{$Post->category->name}}
                                </span>
                                <span>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <a href='author.php'>{{$Posts->user->first_name . ' '. $Post->user->last_name}}</a>
                                </span>
                                <span>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    {{\Carbon\Carbon::parse($Posts->created_at)->format('Y-m-d')}}
                                </span>
                            </div>
                            <img class="single-feature-image" src="{{asset($Post->image)}}" alt=""/>
                            <p class="description">
                               {{ $Post->description}}                        
                                </p>
                        </div>
                    </div>
                    <!-- /post-container -->
                </div>
                @include('frontend.layout.sidebar')
            </div>
        </div>
    </div>
@endsection