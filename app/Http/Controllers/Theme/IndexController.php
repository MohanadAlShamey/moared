<?php

namespace App\Http\Controllers\Theme;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Part;
use App\Models\Partner;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Work;
use Illuminate\Support\Facades\Artisan;

class IndexController extends Controller
{
    public function index()
    {
       
        $posts=Post::limit(12)->latest()->get();
        $partners=Partner::limit(12)->latest()->get();
        $teams=Team::limit(12)->latest()->get();
        $parts=Part::limit(12)->latest()->get();
        $testimonials=Testimonial::limit(12)->latest()->get();
        $categories=Category::limit(12)->latest()->get();
        $works=Work::limit(15)->latest()->get();
        $slider=Slider::limit(4)->latest()->get();
        return view('theme.index',compact('posts','partners','teams','parts','testimonials','categories','works','slider'));
    }

   public function change_lang($lang){
    session()->forget('lang');
    session()->put('lang',$lang);
    return back();
   }
}
