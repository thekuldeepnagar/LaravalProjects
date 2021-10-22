@extends('master')
@section('content')
<div class='custom-product'>
    <div class="col-sm-10">
            <div class="tranding-wrapper">
                <h3>My Orders</h3>
                @foreach ($order as $item)
                <div class="row searched-item card-list-devider">
                    <div class='col-sm-3'>
                        <a href="detail/{{$item->id}}">  
                            <img class="trending-image" src="{{$item->gallery}}">
                            
                        </a>  
                    </div>
                    <div class='col-sm-3'>
                            <div class="">
                                <h3>Name:{{$item->name}}</h3>
                                <h5>Deliary status: {{$item->status}}</h5>
                                <h5>Address: {{$item->address}}</h5>
                                <h5>Payment Status: {{$item->payment_status}}</h5>
                                <h5>Payment Method: {{$item->payment_method}}</h5>
                            </div>
                    </div>
                </div>
                @endforeach
            </div>
    </div>  
</div>    
@endsection