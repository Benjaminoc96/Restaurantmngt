@extends('layouts.main')
@section('content')
    <form action="{{route('food.store')}}" method="post">
        @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter the food name">
        @error('name')
            <span class="error">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <select name="type" class="form-control" id="type">
            <option selected>Choose food type</option>
            <option value="local">Local</option>
            <option value="american">American</option>
            <option value="chinese">Chinese</option>
            <option value="english">English</option>
            <option value="nigerian">Nigerian</option>
            <option value="italian">Italian</option>
            <option value="ivorian">Ivorian</option>
        </select>
        @error('type')
            <span class="error">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="size" class="form-label">Size</label>
        <select name="size" class="form-control" id="size">
            <option selected>Choose food size</option>
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
            </select>
        @error('size')
            <span class="error">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price">
        @error('price')
            <span class="error">{{$message}}</span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
