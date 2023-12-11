@extends('layout')

@section('title', 'Home')

@section('content')

    <h1 class="mb-4">Welcome to Our E-commerce Store</h1>

    <div>
        <h2>Featured Products</h2>

        @foreach ($products as $product)
            <div class="card mb-3">
                <div class="card-body">
                    <h3 class="card-title">{{ $product['name'] }}</h3>
                    <p class="card-text">Price: ${{ $product['price'] }}</p>
                    {{-- <form  --}}
                    {{-- action="{{ route('cart.add', ['id' => $product['id']]) }}"  --}}
                    {{-- method="post"> --}}
                        {{-- @csrf --}}
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    {{-- </form> --}}
                </div>
            </div>
        @endforeach
    </div>
@endsection

