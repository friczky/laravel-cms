<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;
use App\Models\Categories;

class ArticlesController extends Controller
{
    //

    public function index()
    {
        $articles = Articles::with('images')->get();

        return view('pages.articles.index', compact('articles'));
    }

    public function add()
    {
        $categories = Categories::all();
        return view('pages.articles.add', compact('categories'));
    }
}
