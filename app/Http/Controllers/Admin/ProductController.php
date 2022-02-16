<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('admin.products.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'description' => 'required',
            'price' => 'required',
            'thumb' => 'nullable',
            'category_id' => 'required|exists:categories,id',
        ]);

        $data = $request->all();
        $new_product = new Product();

        $slug = Str::slug($data['name'], '-');
        $slug_base = $slug;
        $count = 1;

        while (Product::where('slug', $slug)->first()) {
            $slug = $slug_base . '-' . $count;
            $count++;
        }

        $data['slug'] = $slug;
        $new_product->fill($data);
        $new_product->save();

        return redirect()->route('admin.products.show', $new_product->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $categories = Category::all();
        if (!$product) {
            abort(404);
        }

        return view('admin.products.show', compact('product', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $product = Product::where('slug', $slug)->first();

        if (!$product) {
            abort(404);
        }

        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'name' => 'required|max:100',
            'description' => 'required',
            'price' => 'required',
            'thumb' => 'nullable',
            'category_id' => 'required',
        ]);

        $data = $request->all();
        $product = Product::where('slug', $slug)->first();

        $product->update($data);

        return redirect()->route('admin.products.show', $product->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.products.index')->with('status', 'Prodotto e stato cancelato!');;
    }
}
