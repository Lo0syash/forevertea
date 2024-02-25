<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductConroller extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('pages.product.create', compact('categories'));
    }

    public function store(StoreRequest $request)
    {
        Products::query()->create($request->validated());
        return redirect()->route('index.admin');
    }
    public function destroy(Products $products)
    {
        $products->delete();
        return redirect()->route('index.admin');
    }
    public function edit(Products $products)
    {
        return view('pages.product.edit');
    }
}
