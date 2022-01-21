<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/uploads/product', $filename);
        }

        $category = Product::create([
            'category_id' => $request->input('category_id'),
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'small_description' => $request->input('small_description'),
            'description' => $request->input('description'),
            'original_price' => $request->input('original_price'),
            'selling_price' => $request->input('selling_price'),
            'quantity' => $request->input('quantity'),
            'tax' => $request->input('tax'),
            'status' => $request->input('status') == TRUE ? '1' : '0',
            'trending' => $request->input('trending') == TRUE ? '1' : '0',
            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),
            'meta_keywords' => $request->input('meta_keywords'),
            'image' => $filename
        ]);

        return redirect()->route('admin.product')->with('status', 'Product Added Successfully!');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();

        return view('admin.product.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if ($request->hasFile('image')) {
            $path = 'assets/uploads/product/' . $product->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $product->image = $filename;
        }

        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->small_description = $request->input('small_description');
        $product->description = $request->input('description');
        $product->original_price = $request->input('original_price');
        $product->selling_price = $request->input('selling_price');
        $product->quantity = $request->input('quantity');
        $product->tax = $request->input('tax');
        $product->status = $request->input('status') == TRUE ? '1' : '0';
        $product->trending = $request->input('trending') == TRUE ? '1' : '0';
        $product->meta_title = $request->input('meta_title');
        $product->meta_keywords = $request->input('meta_keywords');
        $product->meta_description = $request->input('meta_description');
        $product->category_id = $request->input('category_id');

        $product->update();

        return redirect()->route('admin.product')->with('status', 'Product Updated Successfully!');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product->image) {
            $path = 'assets/uploads/product/' . $product->image;
            if (File::exists($path)) {
                File::delete($path);
            }
        }

        $product->delete();

        return redirect()->route('admin.product')->with('status', 'Product Successfully Deleted!');
    }
}

