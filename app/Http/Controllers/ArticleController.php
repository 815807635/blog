<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles =Article::query()->orderByDesc('created_at')->take(10)->get();
        return view('welcome',compact('articles'));
    }
    public function show($id){
        $article = Article::query()->find($id);
        if (!$article)return response('文章不存在');
        return view('show',compact('article'));
    }
}
