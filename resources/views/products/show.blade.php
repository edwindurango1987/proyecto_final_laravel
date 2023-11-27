@extends('layouts.app')
    @section('content')


    <main class="container">
        <div class="row">

            <h1 class="alert alert-success text-center"><i class="fas fa-dumbbell"> </i> {{$product->product_name}}</h1>
        </div>

        <div class="row">


            <div class="card my-3">

                <div class="row g-8">
                    <div class="col md-4">

                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6cw2QdGsvlmrVVwvyNW90GyN7nMi8ykuVLg&usqp=CAU" class="card-img-top" alt="...">
                    </div>

                    <div class="col md-4">
                        <div class="card-body">

                            <h5 class="card-title">{{$product->product_name}}</h5>
                            <p class="card-title">{{$product->product_description}}</p>
                            <p class="card-title">{{$product->product_price}}</p>
                            <p class="card-title">{{$product->product_stock}}</p>
                            <p class="card-title">{{$product->product_status}}</p>
                            <p class="card-title">{{$product->product_image}}</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        </div>
        <div class="d-grid gap-2 mt-1">
        <a href="/" class="btn btn-primary">Back</a>
    </main>
</div>
@endsection

