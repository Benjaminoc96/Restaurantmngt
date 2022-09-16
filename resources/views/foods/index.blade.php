@extends ('layouts.main')
@section ('content')
<div class="container">
    <h1>List of Foods</h1>
    <a href="{{route('food.add-form')}}" class="btn btn-lg btn-primary">Add</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Size</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($foods as $food)
            <tr>
                <td>{{$food->name}}</td>
                <td>{{$food->type}}</td>
                <td>{{$food->size}}</td>
                <td>{{$food->price}}</td>
                <td>
                    <a href="" class="btn btn-success">View</a>
                    <a href="" class="btn btn-danger">Delete</a>
                    <a href="" class="btn btn-primary">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
