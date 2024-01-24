@extends('home.base')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-5 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h4 text-center">Sign up here</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('signup')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" placeholder="Enter name" value="{{old('name')}}" class="form-control">
                                @error('name')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Contact</label>
                                <input type="tel" name="contact" placeholder="Enter contact" value="{{old('contact')}}" class="form-control">
                                @error('contact')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
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
                                <input type="submit" value="Create an account" class="btn btn-primary w-100">
                            </div>
                        </form>
                        <a href="{{route('login')}}">Already have an account?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
