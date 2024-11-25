<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function homepage(){
        $post = Posts::orderBy('id', 'desc')->get();
        return view('dashboard', compact('post'));
    }
    public function lastId(){
        $last = Posts::orderBy('id', 'desc')->take(7)->get();
        return view('latestPost', compact('last'));
    }

    public function deletePost($id){
        $post= Posts::find($id)->delete();
        return redirect()->back()->with('message', 'Post deleted successfully');
    }
}