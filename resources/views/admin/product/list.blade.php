@extends('admin.layouts.layout')
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
                @foreach($products as $product)
                    <th> {{ $product->id }}</th>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_price }}</td>
                    <td>{{ $product->description }}</td>
                    <td><a href="{{ route('deletePr',$product->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a> <a
                            href="{{ route('updatePr',$product->id)}}" class="btn btn-info">Edit</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
