<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('show');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products.index', [
            'products' => Product::all()
        ]);
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        
       $product=Product::create($request->all());
        

        foreach ($request->images as $image) {
            $product->images()->create([
                'path' => 'images/' . $image->store('products', 'images'),
            ]);
        }

        return redirect('products');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {

        return view('products.show', ['product'=>$product], compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', ['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->all());
        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back();
    }
}
