<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index($hash)
    {
        $category = Category::where('hash', $hash)->first();
        $date['title'] = $category->title;

        $date['products'] = Product::where('categories_id', $category->id)->get();

        return view('pages.category', $date);
    }
}

