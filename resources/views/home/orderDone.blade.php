@extends('home.base')   

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-4 mx-auto mt-5">
                <div class="card bg-success text-light">
                    <div class="card-body">
                        <h3 class="h3 text-center">Your Order is placed successfully!!!</h3>
                        <a href="{{route('home.home')}}" class="text-light">Back to home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection