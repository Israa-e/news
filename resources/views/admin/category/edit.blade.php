@extends('admin.layout.header')

@section('content')
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="adin-heading"> {{__('Edit Category')}}</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <form action="{{route('Categories.update',$Category->id)}}" method ="POST">
                    @csrf
                    @method('PATCH')
                      <div class="form-group">
                          <input type="hidden" name="cat_id"  class="form-control" value="1" placeholder="">
                      </div>
                      <div class="form-group">
                          <label form="name">{{__('Category Name')}}</label>
                          <input type="text" name="name" id="name" class="form-control" value="Html"  placeholder="" value="{{$Category->name}}" required>
                      </div>
                      <input type="submit" name="sumbit" class="btn btn-primary" value="Update" required />
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection