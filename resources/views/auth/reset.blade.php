@extends('front.layout')

@section('content')
    <div class="container-fluid bg-secondary">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-lg-4 bg-light col-11 col-md-8 p-3 rounded-2">

                <div class="text-center h4 mb-3">Reset Password Page</div>

                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        {{ session('error') }}
                    </div>
                @endif
                <form action="{{ route('reset', $remember_token) }}" method="post">

                    <div class="mb-3">
                        <label for="" class="form-label">OTP</label>
                        <input type="text" class="form-control" name="otp" id="" placeholder="" />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="" placeholder="" />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="c_password" id="" placeholder="" />
                    </div>



                    <div class="d-grid gap-2">
                        <button type="submit" name="" id="" class="btn btn-primary">
                            Submit
                        </button>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('register') }}">Register here</a>
                        <a href="{{ route('login') }}">Login</a>


                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
