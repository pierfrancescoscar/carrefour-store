@extends('layouts.guest')
@section('content')

<section>
    <div class="d-flex justify-content-center bg-lightgray">
        <div class="d-flex justify-content-center mt-5 py-5">
            <div class="d-flex flex-basis-50">
                <div class="img-container bg-white">
                    <img src="{{ $product->thumb }}" alt="{{ $product->name }}">
                </div>
            </div>
            <div class="d-flex flex-column flex-basis-50 min-w-50 justify-content-start ml-5 pr-3 pb-3">
                <div class="d-flex flex-column">
                    <button class="btn-icon"><i data-feather="heart"></i></button>
                    <div class="d-block mt-4">
                        <h3 class="text-20 fw-bold">{{ $product->name }}</h3>
                        <p class="text-14 fw-bolder">{{ $product->description }}</p>
                    </div>
                </div>
                <div class="d-flex align-items-end justify-content-between mt-5">
                    <div class="d-flex flex-column mt-3">
                        <div class="d-flex text-14 my-2">
                            @if($product->available == 1)
                            <span class="d-flex text-14 text-green">Disponibile</span>
                            @else
                            <span class="d-flex text-14 text-red">Non Disponibile</span>
                            @endif
                        </div>
                        <div class="d-flex text-20 fw-bold">{{ '€ ' . number_format($product->price, 2) }}</div>
                    </div>
                    <div class="d-flex">
                        <button class="d-flex btn-shop">
                            <span class="mr-3 text-16">Aggiungi</span>
                            <span><i data-feather="shopping-cart"></i></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection