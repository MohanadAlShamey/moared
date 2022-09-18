<?php

namespace App\Http\Controllers\Theme;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\Http\Request;

class WorksController extends Controller
{
   public function index(){
$works=Work::latest()->paginate(18);
    return view('theme.works',compact('works'));
   }

   public function show(Work $work){

    return view('theme.work',compact('work'));
   }
}
