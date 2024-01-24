@extends('admin.adminBase')

@section('content')
    <div class="container mt-3 mb-3">
        <div class="row">
            <div class="col">
                <h1 class="display-6 fw-bold float-start"> Insert Products </h1>
                <a href="{{route('admin.product.index')}}" class="btn btn-success float-end mt-1">Go to Manage Product</a>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto ">
                <div class="card bg-dark text-light">
                    <div class="card-body">
                        <form action="{{ route('admin.product.insert') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ old('title') }} ">
                                @error('title')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Price</label>
                                <input type="text" name="price" class="form-control" value="{{ old('price')}}">
                                @error('price')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="">Discount Price</label>
                                <input type="text" name="discount_price" class="form-control" value="{{old('discount_price')}}">
                                @error('discount_price')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="">Description</label>
                                <input type="text" name="description" class="form-control"  value="{{ old('description') }}">
                                @error('description')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control" value="{{ old('image') }}">
                                @error('image')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="">Select Department</label>

                                <select type="text" name="department_id" class="form-control">
                                    <option value="">Select Head Title</option>
                                    @foreach ($departments as $dep)
                                        <option value="{{ $dep->id }}">{{ $dep->dep_title }}</option>
                                    @endforeach

                                </select>
                                @error('department_id')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>

                            
                            <label for="">IsAds</label>
                            <div class="mb-3 d-flex ">
                                <input type="radio" name="isAds" class="form-check" value="0" checked> No 
                                <input type="radio" name="isAds" class="form-check ms-3 " value="1" > Yes 
                                <input type="radio" name="isAds" class="form-check ms-3" value="2" > Other
                                @error('isAds')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4 ">
                                <input type="submit" class="btn btn-outline-primary w-100" value="Insert Product">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
