@extends('admin.layout.app')

@section('content')
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">{{__('Create Category')}}</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <form action="{{route('categories.store')}}" method="POST" autocomplete="off">
                    @csrf
                      <div class="form-group">
                          <label form="name">{{__('Category Name')}}</label>
                          <input type="text" name="name" id="name" class="form-control" placeholder="Category Name" required>
                      </div>
                      <input type="submit" name="save" class="btn btn-primary" value="Save" required />
                  </form>
                  <!-- /Form End -->
              </div>
          </div>
      </div>
  </div>
@endsection