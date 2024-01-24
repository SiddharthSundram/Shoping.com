@extends('home.base')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-4 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h4 text-center">Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" placeholder="Enter email" value="{{old('email')}}" class="form-control">
                                @error('email')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" placeholder="Enter password" value="{{old('password')}}" class="form-control">
                                @error('password')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Login" class="btn btn-success w-100">
                            </div>
                        </form>
                        <a href="{{route('signup')}}">Don't have an account?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
