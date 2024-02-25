<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){ return view('pages.category.create'); }
    public function store(StoreRequest $request) {
        Category::query()->create($request->validated());
        return redirect()->route('index.admin');
    }
    public function destroy(Category $category) {
        $category->delete();
        return redirect()->route('index.admin');
    }
    public function edit(Category $category)
    {
        return view('pages.category.edit', compact('category'));
    }
    public function update(UpdateRequest $updateRequest, Category $category)
    {
        $category->update($updateRequest->validated());
        return redirect()->route('index.admin');
    }
}
