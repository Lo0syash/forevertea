<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Products extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function products()
    {
        return $this->hisMany(Products::class, 'category_id');
    }
    public function getImageUrl()
    {
        return asset('public' . Storage::url($this->path));
    }
}
