<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index() {
    	$articles = DB::table('articles')
    				->get();

        return view('index')->with('articles', $articles);
    }

    public function literatur(){
      $articles = DB::table('articles')
    				->get();
        return view('literatur')->with('articles', $articles);
    }

    public function visual(){
      $articles = DB::table('articles')
    				->get();
        return view('literatur')->with('articles', $articles);
    }

    public function video(){
      $articles = DB::table('articles')
    				->get();
        return view('literatur')->with('articles', $articles);
    }

    public function musik(){
      $articles = DB::table('articles')
    				->get();
        return view('literatur')->with('articles', $articles);
    }
}
