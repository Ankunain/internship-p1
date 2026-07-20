<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Admin Layout</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>
        body {
            overflow-x: hidden;
            background: #f5f6fa;
        }

        /* Navbar */
        .top-navbar {
            height: 60px;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 60px;
            left: 0;
            width: 250px;
            height: calc(100vh - 60px);
            background: #212529;
            transition: .3s;
            overflow-y: auto;
        }

        .sidebar.closed {
            margin-left: -250px;
        }

        .sidebar .nav-link {
            color: #adb5bd;
            padding: 12px 20px;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background: #343a40;
            color: #fff;
        }

        /* Main Content */
        .main-content {
            margin-top: 60px;
            margin-left: 250px;
            padding: 25px;
            transition: .3s;
        }

        .main-content.full {
            margin-left: 0;
        }

        .card {
            border: none;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .08);
        }

        @media(max-width:768px) {

            .sidebar {
                margin-left: -250px;
            }

            .sidebar.show {
                margin-left: 0;
            }

            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark top-navbar px-3">

        <button class="btn btn-outline-light" id="toggleSidebar">
            <i class="bi bi-list"></i>
        </button>

        <span class="navbar-brand mb-0">Admin Panel</span>

        <div class="dropdown">
            <a href="#" class="text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
                Admin
            </a>

            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
        </div>

    </nav>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">

        <ul class="nav flex-column mt-3">

            <li class="nav-item">
                <a href="#" class="nav-link active">
                    <i class="bi bi-speedometer2 me-2"></i>
                    Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('student.index') }}" class="nav-link">
                    <i class="bi bi-people me-2"></i>
                    Students
                </a>
            </li>

        </ul>

    </div>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">

        <div class="container-fluid">
            @yield('content')
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const sidebar = document.getElementById('sidebar');
        const main = document.getElementById('mainContent');
        const btn = document.getElementById('toggleSidebar');

        btn.addEventListener('click', () => {

            if (window.innerWidth <= 768) {

                sidebar.classList.toggle('show');

            } else {

                sidebar.classList.toggle('closed');
                main.classList.toggle('full');

            }

        });
    </script>

</body>

</html>
