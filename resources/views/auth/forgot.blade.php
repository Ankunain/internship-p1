@extends('front.layout')

@section('content')
    <div class="container-fluid bg-secondary">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-lg-4 bg-light col-11 col-md-8 p-3 rounded-2">

                <div class="text-center h4 mb-3">Forgot Page</div>

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

                 @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('forgot') }}" method="post">

                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id=""
                            aria-describedby="emailHelpId" placeholder="abc@mail.com" />
                    </div>


                    <div class="d-grid gap-2">
                        <button type="submit" name="" id="" class="btn btn-primary">
                            Send Reset Link
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
