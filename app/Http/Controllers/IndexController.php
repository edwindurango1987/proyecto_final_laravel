<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    public function Mancuernas(){

        $products=DB::table('products')
        ->where ('fk_category_id',1)
        ->where ('product_status','available')
        ->get();
        return view('inicio.index',compact('products'));
        /* $products = Product::all();
        return view('inicio.index', compact('products')); */
}

public function Barras(){

    $products=DB::table('products')
    ->where ('fk_category_id',3)
    ->where ('product_status','available')
    ->get();
    return view('inicio.index',compact('products'));
    /* $products = Product::all();
    return view('inicio.index', compact('products')); */
}
public function Discos(){

    $products=DB::table('products')
    ->where ('fk_category_id',2)
    ->where('product_status','available')
    ->get();
    return view('inicio.index',compact('products'));
    /* $products = Product::all();
    return view('inicio.index', compact('products')); */
}
public function Bancos(){

    $products=DB::table('products')
    ->where ('fk_category_id',4)
    ->where('product_status','available')
    ->get();
    return view('inicio.index',compact('products'));
    /* $products = Product::all();
    return view('inicio.index', compact('products')); */
}

public function store($request)
    {
       $product=Product::create($request->all());
        $product->load ('categories');
        
    }
    
}

