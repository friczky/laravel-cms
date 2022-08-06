<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class ArticlesController extends Controller
{
    //

    public function index()
    {
        $articles = Articles::with('images')->get();

        return view('pages.articles.index', compact('articles'));
    }
}
