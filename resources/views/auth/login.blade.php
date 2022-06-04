@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 card mt-3 p-4">
            <h4 class="text-center">Login here</h4>
            <form method="POST" action="#">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="email here">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="password here">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
        <div class="col-4"></div>
    </div>
@endsection
