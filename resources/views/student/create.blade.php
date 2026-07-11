<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8f9fa;
        }

        .card {
            border: none;
            border-radius: 12px;
        }

        .card-header {
            font-size: 20px;
            font-weight: 600;
        }

        .required {
            color: red;
        }
    </style>
</head>

<body>

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="card shadow">

                    <div class="card-header bg-primary text-white">
                        Add New Student
                    </div>

                    <div class="card-body">

                        <form id="studentForm">

                            <div class="row">

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">
                                        Student Name <span class="required">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Enter student name">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">
                                        Roll No
                                    </label>
                                    <input type="text" class="form-control" name="roll_no"
                                        placeholder="Enter roll number">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">
                                        Phone
                                    </label>
                                    <input type="text" class="form-control" name="phone"
                                        placeholder="Enter phone number">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">
                                        Email
                                    </label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">
                                        Class
                                    </label>
                                    <input type="text" class="form-control" name="class" placeholder="Enter class">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label class="form-label">
                                        Address
                                    </label>
                                    <textarea class="form-control" rows="4" name="address" placeholder="Enter address"></textarea>
                                </div>

                            </div>

                            <div class="text-end">
                                <button type="reset" class="btn btn-secondary">
                                    Reset
                                </button>

                                <button id="submitBtn" type="submit" class="btn btn-primary">
                                    Save Student
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $('#studentForm').submit(function(e) {
            e.preventDefault();

            // let data = new FormData(this);
            let btn = $('#studentForm').find(':submit');
            let originalHtml = btn.html();
            let data = $(this).serialize();

            $.ajax({
                type: "POST",
                url: "{{ route('student.store') }}",
                data: data,
                beforeSend: function() {
                    btn.prop('disabled', true);
                    btn.html(`  <div class="d-flex justify-content-center align-items-center">
                                    <div class="spinner-border text-dark spinner-border-sm" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>`);

                },
                success: function(response) {
                    alert(response.message)
                },
                error: function(response) {

                },
                complete: function() {
                    btn.html(originalHtml);
                    btn.prop('disabled', false);
                }
            });


        });
    </script>

</body>

</html>
