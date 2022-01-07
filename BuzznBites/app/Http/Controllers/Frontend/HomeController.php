<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::where('trending', '1')
            ->where('status', '1')->take(8)->get();

        $trendingCategories = Category::where('popular', '1')
            ->where('status', '1')->take(4)->get();

        $allCategories = Category::all();

        return view('frontend.home', [
            'featuredProducts' => $featuredProducts,
            'trendingCategories' => $trendingCategories,
            'allCategories' => $allCategories
        ]);
    }

    public function search(Request $request)
    {
        $search_item = $request->input('search');

        $products = Product::where('name', 'like', '%' . $search_item . '%')->get();

        return view('frontend.products.search', compact('products'));
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

    public function products()
    {
        $products = Product::paginate(8);

        return view('frontend.products', compact('products'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function about()
    {
        return view('frontend.about');
    }
}
