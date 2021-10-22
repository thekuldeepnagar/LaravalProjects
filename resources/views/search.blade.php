@extends('master')
@section('content')
<div class='custom-product'>
    <div class='col-sm-3'>
       <a href="#">Filter</a>
    </div>
    <div class="tranding-wrapper col-sm-4">
        <h3>Results</h3>
        @foreach ($products as $item)
        <div class="search-item">
        <a href="detail/{{$item['id']}}">  
        <img class="trending-image" src="{{$item['gallery']}}">
        <div class="">
            <h3>{{$item['name']}}</h3>
            <h5>{{$item['description']}}</h5>
        </div>
        </a>  
        </div>
        @endforeach
    </div>

    
</div>

@endsection