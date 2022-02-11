@extends('layouts.guest')
@section('content')

<section>
    {{--
    <div class="row">
        <div class="col-6">
            <h3>{{$product->name}}</h3>
            @if($product->available == 1)
            <span class="d-block"><strong>Available:</strong> Yes</span>
            @else
            <span class="d-block"><strong>Available:</strong> No</span>
            @endif
        </div>
        <div class="col-6">
            <p>{{ $product->description }}</p>
            <img src="{{ $product->thumb }}" alt="{{ $product->name }}" />
        </div>
    </div>
    --}}
    <div class="d-flex justify-content-center">
        <div class="d-flex justify-content-center py-5">
            <div class="d-flex flex-basis-50">
                <div class="img-container">
                    <img src="{{ $product->thumb }}" alt="{{ $product->name }}">
                </div>
            </div>
            <div class="d-flex flex-column flex-basis-50 min-w-50 justify-content-start ml-5 pr-3 pb-3">
                <div class="d-flex flex-column">
                    <button class="btn-icon"><i data-feather="heart"></i></button>
                    <div class="d-block mt-4">
                        <h3 class="text-20">{{ $product->name }}</h3>
                        <p class="text-14">{{ $product->description }}</p>
                    </div>
                </div>
                <div class="d-flex">1</div>
            </div>
        </div>
    </div>
</section>

@endsection