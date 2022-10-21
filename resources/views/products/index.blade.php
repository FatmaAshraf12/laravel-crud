@extends('./../layout')

@section('content')
    <table class="table table-bordered text-center w-75 m-auto">
        <thead class="table" style="background-color: #e9e9e9">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>

                        <form action="{{ route('products.edit', $product->id) }}">
                            <button class="btn btn-success">Edit</button>
                        </form>
                        <form action="{{ route('products.show', $product->id) }}">
                            <button class="btn btn-primary">Show</button>
                        </form>


                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
