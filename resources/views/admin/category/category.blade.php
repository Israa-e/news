@extends('admin.layout.app')

@section('content')

<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">{{__('All Categories') }}</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href={{ route('categories.create') }}>{{__('Create Categoy')}}</a>
            </div>
            <div class="col-md-12">
                <table class="content-table">
                    <thead>
                        <th>S.No.</th>
                        <th>Category Name</th>
                        <th>No. of Posts</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        @foreach($Category as $Categories)
                        <tr>
                            <td class='id'>{{ $Categories->id }}</td>
                            <td>{{ $Categories->name }}</td>
                            <td>5</td>
                            <td class='edit'><a href={{ route('categories.edit',$Categories->id) }}><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='{{route('categories.destroy',$Categories->id)}}' onclick="event.preventDefault();document.getElementById('destroy').action = '{{route('categories.destroy',$Categories->id)}}';document.getElementById('destroy').submit();"><i class='fa fa-trash-o'></i></a></td>
                        </tr>
                        @endforeach
                        <form action="" id="delete_user" method="post">@csrf @method('DELETE')</form>
                    
                    </tbody>
                </table>
                {{$Category->links()}}

            </div>
        </div>
    </div>
</div>
@endsection