@extends('front.layout')

@section('content')
    <div class="container-fluid bg-secondary">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-lg-4 bg-light col-11 col-md-8 p-3 rounded-2">

                <div class="text-center h4 mb-3">Register Page</div>

                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form action="{{ route('register') }}" method="post">

                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="" aria-describedby=""
                            placeholder="" />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id=""
                            aria-describedby="emailHelpId" placeholder="abc@mail.com" />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="" placeholder="" />
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" name="" id="" class="btn btn-primary">
                            Register
                        </button>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('login') }}">Login here</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
