@extends('admin.layout.app')

@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="admin-heading">{{ __('Edit Post') }}</h1>
                </div>
                <div class="col-md-offset-3 col-md-6">
                    <!-- Form for show edit-->
                    <form action="{{route('posts.update',$Posts->id)}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="hidden" name="post_id" class="form-control" value="1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="post_title" id="title" class="form-control" value="{{$Posts->title}}">
                        </div>
                        <div class="form-group">
                            <label for="description"> {{__('Description') }}</label>
                            <textarea name="description" id="description" class="form-control"  aria-valuetext="{{$Posts->description}}" required rows="5">
                                
                </textarea>
                        </div>
                        <div class="form-group">
                            <label for="Category">{{__('Category') }}</label>
                            <select class="form-control" name="category" id="category">
                                @foreach ($Posts as $Post )
                                <option value="">$Post->category->name</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">{{__(Post image) }}</label>
                            <input type="file" name="new-image">
                            <img src="$Posts->image" height="150px">
                            <input type="hidden" name="old-image" value="">
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Update" />
                    </form>
                    <!-- Form End -->
                </div>
            </div>
        </div>
    </div>
@endsection
