@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-5">Create a new product</h1>

    {{-- Error Messages --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- Form --}}
    <form action="{{ route('admin.products.store') }}" method="POST">
        @csrf

        {{-- Title --}}
        <div class="mb-3">
            <label for="name" class="form-label">Name*</label>
            <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}">
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- Description --}}
        <div class="mb-3">
            <label for="description" class="form-label">Description*</label>
            <textarea class="form-control" type="text" name="description"
                id="description">{{ old('description') }}</textarea>
            @error('description')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- Price --}}
        <div class="mb-3">
            <label for="price" class="form-label">Price*</label>
            <input class="form-control" type="text" name="price" id="price" value="{{ old('price') }}">
            @error('price')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- Category --}}
        <div class="mb-3">
            <label for="category_id" class="form-label">Price*</label>
            <select class="form-control" name="category_id" id="category_id">
                <option value="">Uncategorized</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            @error('category_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- Thumb --}}
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb*</label>
            <input class="form-control" type="text" name="thumb" id="thumb" value="{{ old('thumb') }}">
            @error('thumb')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- Available Or Not --}}
        <div class="mb-3">
            <label for="available" class="form-label">Available*</label>
            <select name="available" id="available">
                <option value="1" @if (old('available')==1) selected @endif>Yes</option>
                <option value="0" @if (old('available')==0) selected @endif>No</option>
            </select>
            @error('available')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- Submit --}}
        <button class="btn btn-primary" type="submit">Create Product</button>
</div>

</form>

</div>

@endsection