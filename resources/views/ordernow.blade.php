@extends('master')
@section('content')
<div class='custom-product'>
    <div class="col-sm-10">
        <table class="table">
        
            <tbody>
                <tr>
                <td>Ammount</td>
                <td>₹{{$total}}.00</td>
                </tr>
                <tr>
                <td>Tax</td>
                <td>₹ 0.00</td>
                </tr>
                <tr>
                <td>Delivary</td>
                <td>₹40.00</td>
                </tr>
                <tr>
                <td>Total Ammount</td>
                <td>₹{{$total+40}}.00</td>
                </tr>
            </tbody>
        </table>
        <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                <textarea name='address' class="form-control" placeholder="Enter Your address"></textarea>
                </div>
                <div class="form-group">
                <label for="pvd">Payment Method</label><br>
                <input type="radio" value='Cash' name="payment"><span>Online Payment</span>
                <input type="radio" value='Cash' name="payment"><span>EMI Payment</span>
                <input type="radio" value='Cash' name="payment"><span>Payment On Delivary</span>
                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
            </form>
        </div>
    
    </div>
</div> 
@endsection  