@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="alert alert-info text-center">Create New User</h1>
        </div>
        <div class="col-12">
            <form action="{{ route('users.store') }}" method="post" class="row">
            
                @csrf

                <div class="col-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{old('name')}}">
                </div>
                <div class="col-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{old('email')}}">
                </div>
                <div class="col-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" id="password" name="password" placeholder="password" value="{{old('password')}}">
                </div>

                
                <div class="col-6">
                    <label for="admin_since" class="form-label">Admin Since</label>
                    <input type="date" class="form-control" id="admin_since" name="admin_since"" placeholder="created_at" value="{{old('admin_since')}}">
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
                <a href="{{route('users.index')}}" class="btn btn-danger">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection