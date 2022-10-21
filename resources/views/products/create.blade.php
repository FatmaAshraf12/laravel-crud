@extends('./../layout')

@section('content')
    <form class="w-50 m-auto create" action="{{ route('products.store') }}" method="POST">
        <h4>Add Product</h4>
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="price">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
