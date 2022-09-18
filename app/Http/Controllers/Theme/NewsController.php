<?php

namespace App\Http\Controllers\Theme;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
$posts=Post::latest()->paginate(18);
        return view('theme.posts',compact('posts'));
    }
    
    public function show(Post $post){
    
        return view('theme.post',compact('post'));
    
    }
}
