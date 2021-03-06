@extends('layouts.app')

@section('content')

    <section class="container p-3">
        <div class="row">
            <div class="col-6">
                {{-- Name --}}
                <h3>{{$product->name}}</h3>
                {{-- Available Or Not --}}
                @if($product->available == 1)
                <span class="d-block"><strong>Available:</strong> Yes</span>
                @else
                <span class="d-block"><strong>Available:</strong> No</span>
                @endif
            </div>
            <div class="col-6">
                <p>{{ $product->description }}</p> 
                <div>
                    @if ($product->category_id)
                    <div class="d-block text-black"><strong>Category: </strong>{{$product->category->name}}</div>
                    @else
                    <div class="d-block text-black"><strong>Category: </strong>Uncategorized</div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    
@endsection

