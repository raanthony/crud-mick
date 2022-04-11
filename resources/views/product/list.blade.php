@extends('../layout')
@section('content')
    <div class="container-fluid">
        <h1>liste des produits</h1>
        <table class="table bg-light">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom du produit</th>
                <th scope="col">Prix (en Ariary)</th>
                <th scope="col">Desription</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($listProduct as $produit)
                <th > {{ $produit->id }}</th>
                <td>{{ $produit->product_name }}</td>
                <td>{{ $produit->product_price }}</td>
                <td>{{ $produit->description }}</td>
                    <td><a href="{{ route('deletePr',$produit->id)}}" class="btn btn-danger">Delete</a> <a href="{{ route('updatePr',$produit->id)}}" class="btn btn-info">Edit</a></td>
            </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
