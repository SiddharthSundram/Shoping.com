@extends('admin.adminBase')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-8">
                <h1 class="display-4 fw-bold ">Welcome to Admin's Dashboard</h1>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-6">
                        <a href="{{ route('admin.manageHead') }}" class="text-decoration-none">
                            <div class="card bg-warning text-center text-white">
                                <div class="display-3">{{ $heads }}+</div>
                                <h5>Total Heads</h5>
                            </div>
                        </a>
                    </div>

                    <div class="col-6">
                        <a href="{{ route('admin.manageDepartment') }}" class="text-decoration-none">
                            <div class="card bg-success text-center text-white">
                                <div class="display-3">{{ $departments }}+</div>
                                <h5>Total departments</h5>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="row mt-3">
                    <div class="col-6 mx-auto">
                        <a href="{{ route('admin.product.index') }}" class="text-decoration-none">
                            <div class="card bg-danger text-center text-white">
                                <div class="display-3">{{ $products }}+</div>
                                <h5>Total Products</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
