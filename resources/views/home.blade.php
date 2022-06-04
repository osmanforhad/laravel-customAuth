@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 card mt-3 p-4">
            <h4 class="text-center">Welcome  Back, {{ Auth::user()->name }}</h4>

        </div>
        <div class="col-4"></div>
    </div>
@endsection
