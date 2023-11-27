<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategorytRequest;

class CategoryController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        return view('categories.index', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategorytRequest $request)
    {
        $categories=Category::create($request->all());
        return redirect('categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('categories.show',['category'=>$category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('categories.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategorytRequest $request, Category $category)
    {
        $category->update($request->all());
        return redirect('categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back();
    }
}
