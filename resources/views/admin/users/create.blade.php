@extends('admin.layout.app')

@section('content')
<div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">{{__('Create User')}}</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <form  action="{{route('users.store')}}" method ="POST" autocomplete="off">
                      @csrf
                      <div class="form-group">
                          <label for="first_name">{{__('First Name')}}</label>
                          <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" required>
                      </div>
                          <div class="form-group">
                          <label for="last_name">{{__('Last Name')}}</label>
                          <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" required>
                      </div>
                      <div class="form-group">
                          <label for="username">{{__('User Name')}}</label>
                          <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                      </div>

                      <div class="form-group">
                          <label for="password">{{__('Password')}}</label>
                          <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                      </div>
                      <div class="form-group">
                          <label for="role">{{__('Role')}}</label>
                          <select id="role" class="form-control" name="role" >
                              <option value="0">{{__('Normal User')}}</option>
                              <option value="1">{{__('Admin')}}</option>
                          </select>
                      </div>
                      <input type="submit" name="save" class="btn btn-primary" value="Save" required />
                  </form>
               </div>
           </div>
       </div>
   </div>
@endsection
