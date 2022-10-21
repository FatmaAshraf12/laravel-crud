@extends('./../layout')

@section('content')
    <form class="w-50 m-auto create">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" value="{{ $product->name }}" name="name" readonly>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" value="{{ $product->price }}" name="price" readonly>
        </div>
    </form>
@endsection
