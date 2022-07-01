@extends('admin.layout.app')
@section('content')
<div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">{{__('All Users')}}</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href={{ route('users.create') }}>{{__('Create User')}}</a>
              </div>
              <div class="col-md-12">
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Full Name</th>
                          <th>User Name</th>
                          <th>Role</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                      @foreach($Users as $User)
                          <tr>
                              <td class='id'>{{$User->id}}</td>
                              <td>{{$User->first_name .' '.$User->last_name}}</td>
                              <td>{{$User->username}}</td>
                              <td>{{$User->role == 0?'Normal':'Admin'}}</td>
                              <td class='edit'><a href={{ route('users.edit',$User->id) }}><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='{{route('users.destroy',$User->id)}}' onclick="event.preventDefault();document.getElementById('delete_user').action = '{{route('users.destroy',$User->id)}}';document.getElementById('delete_user').submit();"><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                      @endforeach
                      <form action="" id="delete_user" method="post">@csrf @method('DELETE')</form>
                      </tbody>
                  </table>
                  {{$Users->links()}}
              </div>
          </div>
      </div>
  </div>
@endsection
