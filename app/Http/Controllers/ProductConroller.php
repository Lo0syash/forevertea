<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest;
use App\Models\Category;
use App\Models\Products;
use App\Http\Requests\Product\UpdateRequest;

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
    public function destroy(Products $product)
    {
        $product->delete();
        return redirect()->route('index.admin');
    }
    public function edit(Products $product)
    {
        $categories = Category::all();
        return view('pages.product.edit', compact('product', 'categories'));
    }
    public function update(UpdateRequest $updateRequest, Products $product)
    {
        $product->update($updateRequest->validated());
        return redirect()->route('index.admin');
    }
}
