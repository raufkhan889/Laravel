<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::where('trending', '1')->take(15)->get();
        $trendingCategories = Category::where('popular', '1')->take(15)->get();

        return view('frontend.index', [
            'featuredProducts' => $featuredProducts,
            'trendingCategories' => $trendingCategories
        ]);
    }

    public function category()
    {
        $categories = Category::where('status', '1')->get();

        return view('frontend.category', compact('categories'));
    }

    public function showCategory($slug)
    {
        if (Category::where('slug', $slug)->exists()) {
            $category = Category::where('slug', $slug)->first();
            return view('frontend.products.index', compact('category'));
        } else {
            return redirect()->route('home')->with('status', 'Category not Found!');
        }
    }

    public function showProduct($c_slug, $p_slug)
    {
        if (Category::where('slug', $c_slug)->exists()) {
            if (Product::where('slug', $p_slug)->exists()) {
                $product = Product::where('slug', $p_slug)->first();
            } else {
                return redirect()->route('home')->with('status', 'Product not Found!');
            }
        } else {
            return redirect()->route('home')->with('status', 'Category not Found!');
        }

        return view('frontend.products.show', compact('product'));
    }
}
