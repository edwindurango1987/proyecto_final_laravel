@extends('layouts.app')
@section('content') {{-- @yield('content') --}}

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="alert alert-info text-center">Create new Product</h1>
        </div>
        <div class="col-12">
            <form action="{{ route('products.store') }}" method="post" class="row" enctype="multipart/form-data">
                
                @csrf

                <div class="col-6">
                    <label for="product_name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="product_name" value="{{old('product_name')}}">
                </div>
                <div class="col-6">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" value="{{old('slug')}}">
                </div>

                <div class="col-6">
                    <label for="product_description" class="form-label">Product Description</label>
                    <input type="text" class="form-control" id="product_description" name="product_description" placeholder="product_description" value="{{old('product_description')}}">
                </div>
                <div class="col-6">
                    <label for="product_price" class="form-label">Product Price</label>
                    <input type="number" class="form-control" id="product_price" name="product_price" placeholder="product_price" value="{{old('product_price')}}">
                </div>
                <div class="col-6">
                    <label for="product_stock" class="form-label">Product Stock</label>
                    <input type="number" class="form-control" id="product_stock" name="product_stock" placeholder="product_stock" value="{{old('product_stock')}}">
                </div>
                <div class="col-6">
                    <label for="product_status" class="form-label">Product Status</label>
                    <input type="text" class="form-control" id="product_status" name="product_status" placeholder="product_status" value="{{old('product_status')}}">
                </div>

                <!-- <div class="col-6">
                    <label for="fk_category_id" class="form-label">Category Id</label>
                    <select name="fk_category_id" id="fk_category_id"> -->


                        <option value=""></option>


                    </select>
                </div>


                <div class="col-6">
                    <label>
                        {{ __('Images') }}
                    </label>

                    <div class="custom-file">
                        <input type="file" accept="image/*" name="images[]" class="custom-file-input" multiple>
                        <label class="custom-file-label">
                            Product images...
                        </label>
                    </div>
                </div>






                @if ($errors->any())
                <div class="alert alert-danger col-12 mt-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="col-12 my-4">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </form>
            
        </div>
        <div class="col-12 mb-4">
            <div class="d-grid gap-2">
                <a href="{{route('products.index')}}" class="btn btn-danger">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection