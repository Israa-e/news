<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        $data = $request->all();
        $Posts = Post::when($request->filled('category_id'),function ($query) use ($data){
            return $query->where('category_id',$data['category_id']);
        })->when($request->filled('user_id'),function ($query) use ($data){
            return $query->where('user_id',$data['user_id']);
        })->when($request->filled('q'),function ($query) use ($data){
            return $query->where('title','Like','%'.$data['q'].'%')->orWhere('description','Like','%'.$data['q'].'%');
        })->paginate(5);
        $RecentPosts = Post::orderBy('created_at','desc')->take(5)->get();
        $Categories = Category::all();
        return view('home.index',compact('Posts','RecentPosts','Categories'));
    }
}
