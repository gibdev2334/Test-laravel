<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        return view('home');
    }

    public function index(){

        $articles = Article::paginate(4);
        // dd($articles);

        return view('articles', [
            'articles' => $articles
        ]);
    }

     public function show($slug){

        $article = Article::where('slug', $slug)->firstOrFail();  
        // dd($article);
        return view('article', [
            'article' => $article
        ]);
    }


    // j'ai rajouté en bas pour le front-end  contact

    public function contact() {
        return view('contact');
    }


    public function vestiges() {
        return view('vestiges');
    }


    public function cami() {
        return view('cami');
    }

    public function paiement() {
        return view('paiement');
    }

      public function success() {
        return view('success');
    }








}