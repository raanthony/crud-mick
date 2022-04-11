@extends('../layout')
@section('content')
    <div class="container">
        @if(isset($uproduct))
            <form method="post" action=" {{ route('updatePr',$uproduct) }}" class="form-horizontal">
                @else
        <form action=" {{ route('prList') }}" method="POST" class="form-horizontal">
            @endif
            {{ csrf_field() }}

            <div class="mb-3">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="product_name"  name="product_name" aria-describedby="product_name" required placeholder="Set a name" value="{{ isset($uproduct) ? $uproduct->product_name : '' }}">
            </div>
            <div class="mb-3">
                <label for="product_name" class="form-label">Product Price</label>
                <input type="number" class="form-control" id="product_price"  name="product_price" aria-describedby="product_price" required placeholder="Set a price" value="{{ isset($uproduct) ? $uproduct->product_price : '' }}"  >

            </div>
            <div class="form-group" >
                <label for="description" class="form-label">Product Description</label>
                <textarea name="description" id="" cols="30" rows="10" placeholder="DESCRIPTION" class="form-control" required> {{ isset($uproduct) ? $uproduct->description : '' }}</textarea><br>

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @endsection
