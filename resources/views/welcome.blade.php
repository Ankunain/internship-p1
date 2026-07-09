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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <link rel="stylesheet" href="/hover.css">

    <style>
        body {
            background: url('https://media.istockphoto.com/id/517188688/photo/mountain-landscape.jpg?s=612x612&w=0&k=20&c=A63koPKaCyIwQWOTFBRWXj_PwCrR4cEoOw2S9Q7yVl8=');
            background-size: cover;
        }


        .auth {
            width: 400px;
            height: 300px;
            color: white;
            margin: auto;
            background-color: white;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
        }

        .glass-card {

            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow:
                0 8px 32px rgba(0, 0, 0, 0.1),
                position: relative;
            overflow: hidden;
        }

        .glass-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg,
                    transparent,
                    rgba(255, 255, 255, 0.8),
                    transparent);
        }

        .glass-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 1px;
            height: 100%;
            background: linear-gradient(180deg,
                    rgba(255, 255, 255, 0.8),
                    transparent,
                    rgba(255, 255, 255, 0.3));
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="auth glass-card mt-5 p-4">

        </div>
        <div class="text-center mt-4">
            <button class="btn btn-dark" data-name="ankush">Ankush</button>
            <button class="btn btn-dark" data-name="mayank">Mayank</button>
            <button class="btn btn-dark" data-name="sneha">Sneha</button>
            <button class="btn btn-dark" data-name="nainsi">Nainsi</button>
            <button class="btn btn-dark" data-name="sudha">Sudha</button>
            <button class="btn btn-dark" data-name="saniya">Sudha</button>

        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-4.0.0.min.js"
        integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script>

    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>


    <script>
        let students = {
            ankush: {
                roll_no: 11,
                class: 'BCA'
            },
            mayank: {
                roll_no: 11,
                class: 'BCA'
            },
            sneha: {
                roll_no: 11,
                class: 'BCA'
            },
            nainsi: {
                roll_no: 11,
                class: 'BCA'
            },
            sudha: {
                roll_no: 11,
                class: 'BCA'
            },
            saniya: {
                roll_no: 11,
                class: 'BCA'
            }
        }


        $('.btn-dark').click(function(e) {
            e.preventDefault();

            let name = $(this).data('name');

            let data = students[name];

            if (data) {
                let output = `<div>
                                <p>Name:${name}</p>
                                <p>Roll No:${data.roll_no}</p>
                                <p>Class:${data.class}</p>
                            </div>`
                $('.glass-card').html(output);
            }

        });
    </script>
</body>

</html>
