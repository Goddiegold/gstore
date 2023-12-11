@extends('layout')

@section('title', 'G-store | Home')

@section('content')

    <div>
        <h2>Featured Products</h2>

        @foreach ($products as $product)
            {{-- <div class="card mb-3">
                <div class="card-body">
                    <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=1399&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="{{ $product['name'] }}">
                    <h3 class="card-title">{{ $product['name'] }}</h3>
                    <p class="card-text">Price: ${{ $product['price'] }}</p>
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                </div>
            </div> --}}
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=1399&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="{{ $product['name'] }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">{{ $product['name'] }}</h3>
                            <p class="card-text">Price: ${{ $product['price'] }}</p>
                            <p class="card-text">{{ $product['name'] }} is a very lovely product.</p>
                            <button type="submit" class="btn btn-danger">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

