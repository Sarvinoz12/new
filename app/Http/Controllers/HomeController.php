<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function about()
    {
        return view('about');
    }

    public function comments()
    {
        return view('comments', [
            'products' => Product::paginate(5),
            'comments' => Comment::all()
        ]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function products()
    {
        return view('products', ([
            'products' => Product::paginate(5),
            'comments' => Comment::all()
        ]));
    }

    public
    function index()
    {
        return view('index',
            [
                'products' => Product::all(),
                'comments' => Comment::all()
            ]);
    }
}
