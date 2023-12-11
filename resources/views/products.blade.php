@extends('layout')

@section('title', 'Our Products')

@section('content')
    <h1>Our Products</h1>

    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=1399&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="{{ $product['name'] }}">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title">{{ $product['name'] }}</h5>
                            <h6>${{$product['price']}}</h6>
                        </div>
                        <p class="card-text">{{ $product['name'] }} is a very lovely product.</p>
                        <a href="#" class="btn btn-danger">Add to Cart</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
