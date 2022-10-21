@extends('./../layout')

@section('content')
    <form class="w-50 m-auto create" action="{{ route('products.update', $product->id) }}" method="POST">
        <h4>Edit Product</h4>

        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" value={{ $product->name }}
                name="name">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" aria-describedby="emailHelp"
                value={{ $product->price }} name="price">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
