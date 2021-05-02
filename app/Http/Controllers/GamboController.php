<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class GamboController extends Controller
{
    public function index(Posts $posts){
        $data = $posts->orderBy('created_at','desc')->get();
        return view('template_frontend.gambo', compact('data'));
    }
}
