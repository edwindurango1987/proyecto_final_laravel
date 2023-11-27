@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="alert alert-info text-center">Gym System - Categories</h1>
        </div>
        <div class="col-12">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Category Description</th>
                        <th scope="col">Category Priority</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <th scope="row">{{$category->category_id}}</th>
                            <td>{{$category->category_name}}</td>
                            <td>{{$category->category_description}}</td>
                            <td>{{$category->category_priority}}</td>
                            <td>{{$category->created_at}}</td>
                            <td>{{$category->updated_at}}</td>
                            {{-- <td><a class="btn btn-success" href="/categories/{{$category->category_id}}/edit">Edit</td> --}}
                            <td><a class="btn btn-success" href="{{route('categories.edit', $category)}}"><i class="fa-solid fa-pen-to-square"></i></td>
                            <td>
                                <form 
                                    action="{{route('categories.destroy', $category)}}" 
                                    method="post"
                                    onsubmit="return confirm('Are you sure?')"
                                >
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
        <div class="col-12 mb-4">
        <div class="d-grid gap-2">
            <a href="/categories/create" class="btn btn-success">Add Category</a>
        </div>
    </div>

<div class="col-12 mb-4">
            <div class="d-grid gap-2">
                <a href="{{route('home')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
</div>

@endsection