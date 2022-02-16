@extends('layouts.guest')

@section('content')
@include('components.slider', $categories)

<section class="container">
    <div class="products">
        @foreach ($products as $product)
        <div class="products__item">
					<div class="products__img-wrapper">
						<img src="{{ $product->thumb }}" class="" alt="{{ $product->name }}">
					</div>
                <div class="products__info">
                  <h5 class="">{{ $product->name }}</h5>
                  <p class="">{{ $product->description }}</p>
                  <a href="{{ route('products.show', $product->slug) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                </div>
        </div>
        @endforeach
    </div>
</section>
@endsection