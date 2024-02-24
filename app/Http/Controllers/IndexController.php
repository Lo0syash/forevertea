<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function admin()
    {
        if (!auth()->user() || auth()->user()->role_id !== 2 ) {
            abort(403);
        }
        $categories = Category::all();
        $products = Products::all();
        return view('pages.admin', compact('categories', 'products'));
    }
}
