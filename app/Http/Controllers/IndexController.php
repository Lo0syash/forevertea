<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $category_id = $request->all();
        if (isset($category_id) && isset($category_id['category'])) {
            $category_id = $request->all()['category'];
            $products = Products::query()->where('categories_id', '=', $category_id)->get();
        } else {
            $products = Products::all();
        }
        return view('pages.index', compact('categories', 'products'));
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
