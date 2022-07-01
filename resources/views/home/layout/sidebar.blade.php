<div id="sidebar" class="col-md-4">
    <div class="search-box-container">
        <h4>Search</h4>
        <form class="search-post" action="{{url('/')}}" method="GET">
            <div class="input-group">
                <label style="display: none" for="q"></label>
                <input type="text" name="q" id="q" class="form-control" placeholder="Search .....">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-danger">{{__('Search')}}</button>
                </span>
            </div>
        </form>
    </div>
    <div class="recent-post-container">
        <h4>{{__('Recent Posts')}}</h4>
        @foreach($RecentPosts as $recent_post)
            <div class="recent-post">
                <a class="post-img" href="">
                    <img src="{{asset($recent_post->image)}}" alt=""/>
                </a>
                <div class="post-content">
                    <h5><a href="{{url('show?post_id='.$recent_post->id)}}">{{$recent_post->title}}</a></h5>
                    <span>
                        <i class="fa fa-tags" aria-hidden="true"></i>
                        <a href='{{url('/?category_id='.$recent_post->category_id)}}'>{{$recent_post->category->name}}</a>
                    </span>
                    <span>
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        {{\Carbon\Carbon::parse($recent_post->created_at)->format('Y-m-d')}}
                    </span>
                    <a class="read-more" href="{{url('show?post_id='.$recent_post->id)}}">{{__('Read more')}}</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
