@extends('home.layout.app')
@section('content')
<div id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="post-container">
                        @foreach($Posts as $Post)
                            <div class="post-content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a class="post-img" href="{{url('show?post_id='.$Post->id)}}"><img src="{{asset($Post->image)}}" alt=""/></a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="inner-content clearfix">
                                            <h3><a href='{{url('show?post_id='.$Post->id)}}'>{{$Post->title}}</a></h3>
                                            <div class="post-information">
                                            <span>
                                                <i class="fa fa-tags" aria-hidden="true"></i>
                                                <a href='{{url('/?category_id='.$Post->category_id)}}'>{{$Post->category->name}}</a>
                                            </span>
                                            <span>
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <a href='{{url('/?category_id='.$Post->user_id)}}'>{{$Post->user->first_name . ' '. $Post->user->last_name}}</a>
                                            </span>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                {{\Carbon\Carbon::parse($Post->created_at)->format('Y-m-d')}}
                                            </span>
                                            </div>
                                            <p class="description">{{substr($Post->description, 0 ,130).' ... '}}</p>
                                            <a class='read-more pull-right' href='{{url('show?post_id='.$Post->id)}}'>{{__('Read more')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{ $Posts->links() }}
                    </div>
                </div>
                @include('home.layout.sidebar')
            </div>
        </div>
    </div>
@endsection
