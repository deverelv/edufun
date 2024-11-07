<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show($categoryName)
    {
        $category = Category::where('name', $categoryName)->firstOrFail();
        return view('category', compact('category'));
    }
}
