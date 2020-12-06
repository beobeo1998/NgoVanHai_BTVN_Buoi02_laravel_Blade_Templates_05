<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(){
        $posts = DB::table('posts')->paginate(5);
        return view('home.home',compact('posts'));
    }
}
