@extends('home.base')

@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h1 class="text-capitalize float-start"> {{ $products->title }}</h1>
                <a href="{{ route('home.home') }}" class="btn btn-dark float-end"><i class="bi bi-arrow-left-circle"></i> Go Back</a>
                {{-- <a href="" class="btn btn-dark float-end">Back to home</a> --}}
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row d-flex">
            <div class="col">
                @if ($products->isAds == '1')
                    <img src="{{ asset('storage/' . $products->image) }}" width="700px" height="300px" alt="">
                @else
                    <img src="{{ asset('storage/' . $products->image) }}" width="500px" height="500px" alt="">
                @endif

            </div>
            <div class="col ">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table ">
                                <tr>
                                    <th>Name : </th>
                                    <td class="fs-4">{{ $products->title }}</td>
                                </tr>
                                <tr>
                                    <th>Price : </th>
                                    <td class="text-success fw-bold fs-3">Rs.{{ $products->discount_price }}/-
                                        <del class="text-muted small">Rs.{{ $products->price }}/-</del>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Category : </th>
                                    <td>
                                        <span>
                                            <span>{{ $products->departments->dep_title }}</span>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-truncate">Description:</th>
                                    <td>{{ $products->description }}</td>
                                </tr>
                            </table>

                        </div>

                    </div>

                </div>
                <div class="d-flex gap-3 mt-3 ">
                    <a href="{{ route('addToCart', $products->id) }}" class="btn btn-success rounded-0 btn-lg "> <i
                            class="bi bi-lightning-fill"></i> Buy
                        Now</a>
                    <a href="{{ route('addToCart', $products->id) }}" class="btn btn-warning rounded-0 text-light btn-lg">
                        <i class="bi bi-cart-plus-fill">
                        </i> Add To Cart</a>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h2 class="text-muted">Similar Products </h2>
                <div class="row">
                    
                    @foreach ($departments as $dep)

                        <div class="col-3  mt-3 ">
                            <a href="{{ route('home.viewProduct', $dep->id) }}" class="text-decoration-none">

                                <div class="card cardup bordered border-0 ">
                                    <div class="card-body">
                                        <img src="{{ asset('storage/' . $dep->image) }}" height="250px" alt=""
                                            class="card-img coolimg">
                                        <span>
                                            <h4 class="h5 text-truncate mt-2">
                                                {{ $dep->title }}</h4>

                                        </span>
                                        <h4 class="h6 text-success">
                                            Rs.{{ $dep->discount_price }}/-
                                            <del class="text-muted small">Rs.{{ $dep->price }}/-</del>
                                        </h4>
                                        <p class="small text-truncate">{{ $dep->description }}
                                        </p>

                                    </div>
                                </div>
                            </a>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
