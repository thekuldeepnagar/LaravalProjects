@extends('master')
@section('content')
<div class='container'>
    <div class='row'>
        <div class='col-sm-6 '>
            <img class="detail-img" src="{{$products['gallery']}}">
        </div>
        <div class='col-sm-6 '>
            <a href="/">Go Back</a>
            <h2>{{$products['name']}}</h2>
            <h3>Price : ₹{{$products['price']}}.00/-</h3>
            <h4>Detail : {{$products['description']}}</h4>
            <h4>Category : {{$products['category']}}</h4>
            <div class='detail-button'>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type='hidden' name='product_id' value={{$products['id']}}></input>    
                    <button class="btn btn-primary">Add To Cart</button>
                </form>
            </div>    
                <div class='detail-button'>
                <form action='/buynow' method='POST'>
                    @csrf
                    <input type='hidden' name='product_id' value={{$products['id']}}></input>
                    <button class="btn btn-success">Buy Now</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection