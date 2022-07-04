@extends('admin.layout.app')

@section('content')
<div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">{{__('Create Post')}}</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form -->
                  <form  action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <div class="form-group">
                          <label for="title">{{__('Title') }}</label>
                          <input type="text" name="title" id="title" class="form-control" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                          <label for="description"> {{__('Description') }}</label>
                          <textarea name="description" id="description" class="form-control" rows="5"  required></textarea>
                      </div>
                      <div class="form-group">
                          <label for="category">{{__('Category')  }}</label>
                          <select name="category" id="category" class="form-control">
                              <option value="" selected> Select Category</option>
                              @foreach ($Posts as $Post )
                              <option value="">$Post->category->name</option>                                  
                              @endforeach
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="image">{{__('Post image') }}</label>
                          <input type="file" name="image" id="image" required>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                  </form>
                  <!--/Form -->
              </div>
          </div>
      </div>
  </div>
  @endsection
