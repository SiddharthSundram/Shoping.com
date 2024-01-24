@extends('home.base')   

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-4 mx-auto mt-5">
                <div class="card">
                    <div class="card-body">
                        <h3 class="h3">Select Payment Mode</h3>
                        <div class="list-group">
                            <a href="" class="list-group-item list-group-item-action disabled">UPI</a href="">
                            <a href="" class="list-group-item list-group-item-action disabled">Net Banking</a href="">
                            <a href="{{route('orderDone')}}" class="list-group-item list-group-item-action">Cash On Delivery</a href="">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection