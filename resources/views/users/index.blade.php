@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="alert alert-info text-center">Gym System - Users</h1>
        </div>
        <div class="col-12">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID User</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Email Verifed At</th>
                        <th scope="col">Admin Since</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$user->id_user}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->email_verified_at}}</td>
                            <td>{{$user->admin_since}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>
                            {{-- <td><a class="btn btn-success" href="/products/{{$user->id_user}}/edit">Edit</td> --}}
                            <td><a class="btn btn-success" href="{{route('users.edit', $user)}}"><i class="fa-solid fa-pen-to-square"></i></td>
                            <td>
                                <form 
                                    action="{{route('users.destroy', $user)}}" 
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
            <a href="/users/create" class="btn btn-success">Add User</a>
        </div>
    </div>
    <div class="col-12 mb-4">
        <div class="d-grid gap-2">
            <a href="{{route('home')}}" class="btn btn-primary">Back</a>
        </div>
</div>
@endsection