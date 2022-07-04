@extends('admin.layout.app')

@section('content')
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">{{__('All Posts')}}</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href={{ route('posts.create') }}>{{__('Create Post')}}</a>
              </div>
              <div class="col-md-12">
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Date</th>
                          <th>Author</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                        @foreach($Posts as $Post)
                          <tr>
                              <td class='id'>{{$Post->id}}</td>
                              <td>{{$Post->title}}</td>
                              <td>{{$Post->category->name}}</td>
                              <td>{{\Carbon\Carbon::parse($Post->created_at)->format('Y-m-d')}}</td>
                              <td>{{$Post->user->role ==0 ? "Normal":"Admin" }}</td>
                              <td class='edit'><a href={{ route('posts.edit',$Post->id) }}><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='{{route('posts.destroy',$Post->id)}}' onclick="event.preventDefault();document.getElementById('delete_post').action = '{{route('posts.destroy',$Post->id)}}';document.getElementById('delete_post').submit();"><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          @endforeach
                      <form action="" id="delete_user" method="post">@csrf @method('DELETE')</form>
                      
                      </tbody>
                  </table>
                  {{$Posts->links()}}
              </div>
          </div>
      </div>
  </div>
@endsection