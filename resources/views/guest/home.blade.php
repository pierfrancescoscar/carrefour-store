@extends('layouts.app')
@include('components.navbar')
@section('content')


<section class="container">
    <div class="row">
        @foreach ($products as $product)
        <div class="col-2">
            <div class="card h-100">
                <img style="width: 100%; height: 200px; object-fit: cover;" src="{{ $product->thumb }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $product->name }}</h5>
                  <p class="card-text">{{ $product->description }}</p>
                  <a href="{{ route('products.show', $product->slug) }}" class="btn btn-primary">Read more</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</section>
@endsection