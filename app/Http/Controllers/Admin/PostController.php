<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $Posts = Post::paginate(5);
        return view('admin.post.post',compact('Posts'));
    }
    public function create(){
        $Posts = new Post();
        return view('admin.post.create',compact('Posts'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|longText|max:355',
            'image' => 'required|string|max:255|unique:users,username',
            
        ]);
        $Post = new Post();
        $Post->title = $request->title;
        $Post->description = $request->description;
        $Post->image = $request->image;
        $Post->category_id = $request->category_id;
        $Post->user_id = $request->user_id;
        $Post->save();
        return redirect()->route('posts.index');
    }

    public function edit($id){
        $Post = Post::findOrFail($id);
        return view('admin.post.edit',compact('Post'));
    }

    public function update($id,Request $request){
        $Post = Post::findOrFail($id);
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,'.$id,
            'password'=>'sometimes|string|min:6|max:25',
            'role'=>'required|in:1,0'
        ]);
        $Post->title = $request->title;
        $Post->description = $request->description;
        $Post->image = $request->image;
        return redirect()->route('posts.index');
    }

    public function destroy($id){
        $Post = Post::findOrFail($id);
        $Post->delete();
        return redirect()->route('posts.index');
    }
}
