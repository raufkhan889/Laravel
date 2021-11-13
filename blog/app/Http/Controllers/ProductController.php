<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $products = Product::all();

        return view("products.index", [
            'products' => $products
        ]);
    }

    public function show($id)
    {
        $error = "";
        $product = Product::all()->where('id', $id)->first();

        if ($product == null) {
            $error = "Product not Found!";
        }

        return view('products.show', [
            'product' => $product,
            'error' => $error

        ]);
    }

    public function manage()
    {
        $products = Product::all();

        return view('products.manage', [
            'products' => $products
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function search()
    {
        return view('products.search');
    }

    public function delete()
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update()
    {
        //
    }
}
