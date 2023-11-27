@extends('layouts.app')
@section('content') {{-- @yield('content') --}}
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="alert alert-info text-center">Gym System - Products</h1>
        </div>
        <div class="col-12">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Description</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Product Stock</th>
                        <th scope="col">Product Status</th>
                        <th scope="col">Category ID</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <th scope="row">{{$product->product_id}}</th>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->product_description}}</td>
                        <td>{{$product->product_price}}</td>
                        <td>{{$product->product_stock}}</td>
                        <td>{{$product->product_status}}</td>
                        <td>{{$product->fk_category_id}}</td>
                        <td>{{$product->product_image}}</td>
                        <td>{{$product->created_at}}</td>
                        <td>{{$product->updated_at}}</td>

                        {{-- <td><a class="btn btn-success" href="/products/{{$product->product_id}}/edit">Edit</td> --}}
                        <td><a class="btn btn-success" href="{{route('products.edit', $product)}}"><i class="fa-solid fa-pen-to-square"></i></td>
                        <td>
                            <form action="{{route('products.destroy', $product)}}" method="post" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-12  mb-4">
            <div class="d-grid gap-2">
                <a href="/products/create" class="btn btn-success">Add Product</a>
            </div>
        </div>

    <div class="col-12 mb-4">
        <div class="d-grid gap-2">
            <a href="{{route('home')}}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
@endsection