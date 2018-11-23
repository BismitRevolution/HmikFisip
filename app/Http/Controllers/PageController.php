<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index() {
        $articles = DB::table('articles')->get();
        foreach($articles as $article){
            $article->media = DB::table('media')
                                ->where('media.article_id', '=', $article->article_id)
                                ->get();
        }
        return view('index')->with('articles', $articles);
    }

    public function showarticle($id) {
        $article = DB::table('articles')
                    ->where('articles.article_id', '=', $id)
                    ->first();
        $media = DB::table('media')
                    ->where('media.article_id', '=', $article->article_id)
                    ->get();
        return view('pages.article')
                    ->with(['article' => $article, 'media' => $media]);
    }

    public function showcategory($category) {
        $articles = DB::table('articles')
                    ->where('articles.category', '=', $category)
                    ->get();
        foreach($articles as $article){
            $article->media = DB::table('media')
                                ->where('media.article_id', '=', $article->article_id)
                                ->get();
        }
        return view('pages.category')->with('articles', $articles)->with('category', $category);
    }

    public function dashboard() {
        return view('admin.dashboard');
    }

    public function article() {
        return view('admin.articles.index');
    }
}
