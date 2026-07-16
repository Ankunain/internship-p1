<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ABC College</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .hero {
            background: linear-gradient(rgba(0, 0, 0, .65), rgba(0, 0, 0, .65)),
                url('https://img.magnific.com/free-vector/student-silhouette-made-words_23-2147493148.jpg?semt=ais_hybrid&w=740&q=80');
            background-size: cover;
            background-position: center;
            min-height: 650px;
            display: flex;
            align-items: center;
            color: #fff;
        }

        .section-title {
            font-size: 38px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .course-card {
            transition: .3s;
        }

        .course-card:hover {
            transform: translateY(-8px);
        }

        .icon-box {
            width: 70px;
            height: 70px;
            background: #0d6efd;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 28px;
            margin: auto;
        }

        .stats {
            background: #0d6efd;
            color: white;
        }

        .news-card img {
            height: 220px;
            object-fit: cover;
        }

        .testimonial {
            background: #f8f9fa;
        }

        footer {
            background: #212529;
            color: white;
        }

        footer a {
            color: #ddd;
            text-decoration: none;
        }

        footer a:hover {
            color: white;
        }
    </style>

</head>

<body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">

        <div class="container">

            <a class="navbar-brand fw-bold fs-3 text-primary" href="#">
                ABC College
            </a>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="menu">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>

            </div>

        </div>

    </nav>


    @yield('content')

    <!-- Footer -->

    <footer class="py-5">

        <div class="container">

            <div class="row">

                <div class="col-lg-4">

                    <h4>
                        ABC College
                    </h4>

                    <p>

                        Providing excellence in education for future leaders.

                    </p>

                </div>

                <div class="col-lg-4">

                    <h5>
                        Quick Links
                    </h5>

                    <ul class="list-unstyled">

                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>

                    </ul>

                </div>

                <div class="col-lg-4">

                    <h5>
                        Contact
                    </h5>

                    <p>

                        <i class="bi bi-geo-alt"></i>
                        123 College Road

                    </p>

                    <p>

                        <i class="bi bi-envelope"></i>
                        info@abccollege.com

                    </p>

                    <p>

                        <i class="bi bi-telephone"></i>
                        +91 9876543210

                    </p>

                </div>

            </div>

            <hr>

            <div class="text-center">

                © 2026 ABC College. All Rights Reserved.

            </div>

        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
