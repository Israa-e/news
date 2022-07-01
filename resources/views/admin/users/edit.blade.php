@extends('admin.layout.app')
@section('content')
<div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">{{__('Edit User')}}</h1>
              </div>
              <div class="col-md-offset-4 col-md-4">
                  <form action="{{route('users.update',$User->id)}}" method="post">
                      @csrf
                      @method('PATCH')
                      <div class="form-group">
                          <label for="first_name">{{__('First Name')}}</label>
                          <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" value="{{$User->first_name}}" required>
                      </div>
                      <div class="form-group">
                          <label for="last_name">{{__('Last Name')}}</label>
                          <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" value="{{$User->last_name}}" required>
                      </div>
                      <div class="form-group">
                          <label for="username">{{__('User Name')}}</label>
                          <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="{{$User->username}}" required>
                      </div>
                      <div class="form-group">
                          <label for="password">{{__('Password')}}</label>
                          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                      </div>
                      <div class="form-group">
                          <label for="role">{{__('Role')}}</label>
                          <select id="role" class="form-control" name="role" >
                              <option value="0" @if($User->role == 0) selected @endif>{{__('Normal User')}}</option>
                              <option value="1" @if($User->role == 1) selected @endif>{{__('Admin')}}</option>
                          </select>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>
              </div>
          </div>
      </div>
  </div>
@endsection
