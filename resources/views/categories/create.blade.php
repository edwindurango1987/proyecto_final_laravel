@extends('layouts.app')
@section('content') {{-- @yield('content') --}}
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="alert alert-info text-center">Create new Category</h1>
        </div>
        <div class="col-12">
            <form action="{{ route('categories.store') }}" method="post" class="row">
                @csrf

                <div class="col-6">
                    <label for="cow_name" class="form-label">Category Name</label>
                    <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Name" value="{{old('category_name')}}">
                </div>
                <div class="col-6">
                    <label for="category_description" class="form-label">Category Description</label>
                    <input type="text" class="form-control" id="category_description" name="category_description" placeholder="Description" value="{{old('category_description')}}">    
                </div>
                <div class="col-6">
                    <label for="category_priority" class="form-label">Category Priority</label>
                    <input type="number" class="form-control" id="category_priority" name="category_priority" placeholder="Priority" value="{{old('category_priority')}}">
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
                <a href="{{route('categories.index')}}" class="btn btn-danger">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection