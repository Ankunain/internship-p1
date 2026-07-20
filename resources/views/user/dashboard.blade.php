@extends('user.layout')

@section('content')
    <div class="container">

        <script>
            var alertList = document.querySelectorAll(".alert");
            alertList.forEach(function(alert) {
                new bootstrap.Alert(alert);
            });
        </script>


        <h1>This is user dashboard page</h1>

        <p>

            Name : {{ Auth::user()->name }} <br>
            email : {{ Auth::user()->email }}

        </p>

        <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm">Logout</a>

    </div>
@endsection
