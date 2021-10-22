@extends('master')
@section('content')
<div class='container custom-login'>
    <div class='row'>
        <div class='col-sm-4 col-sm-offset-4    '>
            <form action='register' method='POST'>
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                    <input type="text" class="form-control" name='name' placeholder='User Name'>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name='email' id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="form-group">
                    <label for="exampleInputnumber1" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" name='number'>
                    <div class="form-text">We'll never share your Number with anyone else.</div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name='password' class="form-control" id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>

@endsection