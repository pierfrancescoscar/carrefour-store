@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-5">Update {{ $product->title }}</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- submit --}}
    {{-- Form --}}
    <form action="{{ route('admin.products.update', $product->slug) }}" method="POST">
        @csrf
        @method('PATCH')

        {{-- Title --}}
        <div class="mb-3">
            <label for="name" class="form-label">Name*</label>
            <input class="form-control" type="text" name="name" id="name" value="{{ old('name',$product->name) }}">
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- Description --}}
        <div class="mb-3">
            <label for="description" class="form-label">Description*</label>
            <textarea class="form-control" type="text" name="description"
                id="description">{{ old('description',$product->description) }}</textarea>
            @error('description')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- Price --}}
        <div class="mb-3">
            <label for="price" class="form-label">Price*</label>
            <input class="form-control" type="text" name="price" id="price" value="{{ old('price',$product->price) }}">
            @error('price')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- Thumb --}}
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb*</label>
            <input class="form-control" type="text" name="thumb" id="thumb" value="{{ old('thumb',  $product->thumb )}}">
            @error('thumb')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- Available Or Not --}}
        <div class="mb-3">
            <label for="available" class="form-label">Available*</label>
            <select name="available" id="available">
                <option value="1" @if (old('available',$product->available)==1) selected @endif>Yes</option>
                <option value="0" @if (old('available',$product->available)==0) selected @endif>No</option>
            </select>
            @error('price')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- Submit --}}
        <button class="btn btn-primary" type="submit">Update Product</button>
</div>

</form>

</div>

@endsection