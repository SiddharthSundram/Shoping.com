<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .cardup {
            transition: transform 0.4s ease;
        }

        .cardup:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body style="background-color:rgb(236, 236, 236)">

    <nav class="navbar navbar-expand-lg sticky-top  bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand text-primary fw-bold" href="{{ route('home.home') }}">{{ env('APP_NAME') }}</a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                More <span class="navbar-toggler-icon small"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarScroll">

                <form class="d-flex mx-auto w-50" role="search">
                    <input class="form-control rounded-0 bordered border-info" name="search" type="search"
                        placeholder="Search products,brands and more" aria-label="Search">
                    <button class="btn btn-info rounded-0 text-dark " type="submit">Search</button>
                </form>


                <ul class="navbar-nav  ms-auto navbar-nav-scroll" style="--bs-scroll-height: 100px;">


                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home.home') }}">Home</a>
                    </li>

                    @auth
                        <li class="nav-item">
                            <a class="nav-link text-capitalise " aria-current="page"
                                href="">{{ auth()->user()->name }}</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="{{route('cart')}}">Cart</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="{{route('myorder')}}">My Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="{{ route('logout') }}">Logout</a>
                        </li>
                    @endauth


                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('signup') }}">Create an account</a>
                        </li>
                    @endguest




                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Help
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href=""> <i class="bi bi-headset"></i> 24x7 customer
                                    care</a></li>
                            <li><a class="dropdown-item" href=""><i class="bi bi-badge-ad"></i> Advertisement</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href=""><i class="bi bi-download"></i> Download App</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container mt-4 bg-light">
        <div class="row">
            <div class="col d-flex gap-4">

                @foreach ($heads as $hed)
                    <div class="dropdown">
                        <a class="btn btn-light dropdown-toggle" href="{{ route('home.viewHead', $hed->id) }}" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ $hed->head_title }}
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($departments as $dip)
                                @if ($hed->id == $dip->head_id)
                                    <li> <a class="dropdown-item" href="{{ route('home.ViewDep', $dip->id) }}">{{ $dip->dep_title }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="contaienr mt-5">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
            </div>

            <div class="carousel-inner">
                @foreach ($products as $item)
                    @if ($item->isAds == '1')
                        <a href="{{ route('home.viewProduct', $item->id) }}">
                            <div class="carousel-item  active">
                                <img src="{{ asset('storage/' . $item->image) }}" height="350px"
                                    class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    {{-- <h5 class="text-dark">First slide label</h5>
                                        <p class="text-dark">Some representative placeholder content for the first slide.</p> --}}
                                </div>
                            </div>
                        </a>
                    @endif
                @endforeach

                {{-- 
                <div class="carousel-item">
                    <img src="https://picsum.photos/300" height="500px" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
    
                <div class="carousel-item">
                    <img src="https://picsum.photos/300" height="500px" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div> --}}
            </div>


            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <div class="container-fluid ">
        <div class="row">
            <div class="col">
                <h1 class="ms-5 ps-5 mt-3">Our Products</h1>
            </div>
        </div>
    </div>


    <div class="container">
        @foreach ($heads as $hd)
            <div class="container my-5">
                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('home.viewHead', $hd->id) }}"
                            class="text-capitalise h4 text-decoration-none">{{ $hd->head_title }}</a>
                    </div>
                </div>
                <div class="row">
                    @foreach ($hd->departments as $dep)
                        @foreach ($dep->products as $pro)
                            @if ($pro->isAds == '0' && '2')
                                <div class="col-3  mt-3 ">
                                    <a href="{{ route('home.viewProduct', $pro->id) }}" class="text-decoration-none">

                                        <div class="card cardup bordered border-0 ">
                                            <div class="card-body">
                                                <img src="{{ asset('storage/' . $pro->image) }}" height="250px"
                                                    alt="" class="card-img coolimg">
                                                <span>
                                                    <h4 class="h5 text-truncate mt-2">{{ $pro->title }}</h4>
                                                    @foreach ($departments as $dep)
                                                        @if ($pro->department_id == $dep->id)
                                                            <span
                                                                class="badge bg-success float-end">{{ $dep->dep_title }}</span>
                                                        @endif
                                                    @endforeach
                                                </span>
                                                <h4 class="h6 text-success">Rs.{{ $pro->discount_price }}/- <del
                                                        class="text-muted small">Rs.{{ $pro->price }}/-</del></h4>

                                                <p class="small text-truncate">{{ $pro->description }}</p>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    @endforeach

                </div>
            </div>
        @endforeach

    </div>



    <div class="container-fluid text-light bg-dark mt-5">
        <div class="row">
            <div class="col text-center">
                <h3 class="h5 mt-1">Created By : Siddharth</h3>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>



