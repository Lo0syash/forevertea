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
        $data = $request->validated();
        if ($request->hasFile('path')){
            $data['path'] = $request->file('path')->store('public/products');
            Products::query()->create($data);
        }
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
        $data = $updateRequest->validated();
        if ($updateRequest->hasFile('path')) {
            $data['path'] = $updateRequest->file('path')->store('public/products');
        }
        $product->update($data);
        return redirect()->route('index.admin');
    }
}
