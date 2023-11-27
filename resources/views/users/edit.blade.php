@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="alert alert-info text-center">Edit User {{$user->name}}</h1>
        </div>
        <div class="col-12">
            <form action="{{ route('users.update', $user) }}" method="post" class="row">
                @csrf
                @method('PUT')
                <div class="col-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{old('name',$user->name)}}" placeholder="Name">           
                 </div>
                <div class="col-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{old('email',$user->email)}}" placeholder="Email">
                </div>
                <div class="col-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" id="password" name="password" value="{{old('password',$user->password)}}" placeholder="Password">
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
                        <button type="submit" class="btn btn-primary">Edit</button>
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
        
