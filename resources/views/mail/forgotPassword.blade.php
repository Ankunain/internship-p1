<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />

    <style>
        .btn {
            padding: 5px 10px;
            border: 1px solid black;
            background-color: green;
            color: white;
            margin-top: 10px;
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <h2>Hello {{ $user->name }}</h2> <br>
    <p>This is the system generated email to reset your password.</p> <br>
    <p>Please click the below button to reset your password.</p><br>

    your OTP is <b>{{ $user->remember_token }}</b>
    
    <a class="btn" href="{{ route('reset') }}">Click Here</a>


    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
