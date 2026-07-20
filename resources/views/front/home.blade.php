@extends('front.layout')

@section('content')
    <!-- Hero -->

    <section class="hero">

        <div class="container">

            <div class="row">

                <div class="col-lg-7">

                    <h1 class="display-3 fw-bold mb-4">
                        Shape Your Future With Quality Education
                    </h1>

                    <p class="lead mb-4">

                        ABC College provides world-class education,
                        experienced faculty,
                        modern classrooms,
                        innovation,
                        research,
                        and career opportunities.

                    </p>

                    <a href="#" class="btn btn-primary btn-lg me-3">
                        Apply Now
                    </a>

                    <a href="#" class="btn btn-outline-light btn-lg">
                        Explore Courses
                    </a>

                </div>

            </div>

        </div>

    </section>

    <!-- About -->

    <section class="py-5">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6">

                    <img src="https://images.unsplash.com/photo-1562774053-701939374585?q=80&w=1200"
                        class="img-fluid rounded">

                </div>

                <div class="col-lg-6">

                    <h2 class="section-title">
                        About Our College
                    </h2>

                    <p>

                        Founded with the vision of excellence,
                        ABC College has become one of the leading institutions offering quality education in
                        Engineering, Management, Science, Commerce, and Computer Applications.

                    </p>

                    <p>

                        Our students enjoy modern infrastructure,
                        industry collaborations,
                        placement opportunities,
                        research labs,
                        libraries,
                        and extracurricular activities.

                    </p>

                    <a href="#" class="btn btn-primary">
                        Read More
                    </a>

                </div>

            </div>

            <div class="table-responsive mt-4">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Roll No</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Class</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($students as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->roll_no }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->class }}</td>
                                <td>{{ $student->address }}</td>
                                <td>
                                    <button onclick="deleteData('{{ $student->id }}')"
                                        class="btn btn-danger btn-sm">Delete</button>

                                    <a href="{{ route('student.edit', $student->id) }}" class="btn btn-primary btn-sm">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        @empty

                            <tr>
                                <td colspan="8" class="text-center">
                                    No students found.
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>
        </div>

    </section>

    <!-- Courses -->

    <section class="py-5 bg-light">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="section-title">
                    Popular Courses
                </h2>

                <p>
                    Choose from our industry-oriented programs.
                </p>

            </div>

            <div class="row g-4">

                <div class="col-md-4">

                    <div class="card course-card h-100">

                        <div class="card-body">

                            <i class="bi bi-laptop fs-1 text-primary"></i>

                            <h4 class="mt-3">
                                Computer Science
                            </h4>

                            <p>

                                Programming,
                                AI,
                                Cloud,
                                Cyber Security,
                                Web Development.

                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card course-card h-100">

                        <div class="card-body">

                            <i class="bi bi-gear fs-1 text-success"></i>

                            <h4 class="mt-3">
                                Mechanical Engineering
                            </h4>

                            <p>

                                Advanced manufacturing,
                                automation,
                                CAD,
                                industrial training.

                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card course-card h-100">

                        <div class="card-body">

                            <i class="bi bi-bar-chart-line fs-1 text-danger"></i>

                            <h4 class="mt-3">
                                Business Management
                            </h4>

                            <p>

                                Finance,
                                Marketing,
                                Entrepreneurship,
                                Leadership,
                                HR.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Features -->

    <section class="py-5">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="section-title">
                    Why Choose Us
                </h2>

            </div>

            <div class="row g-4 text-center">

                <div class="col-md-3">

                    <div class="icon-box">

                        <i class="bi bi-mortarboard"></i>

                    </div>

                    <h5 class="mt-3">
                        Expert Faculty
                    </h5>

                </div>

                <div class="col-md-3">

                    <div class="icon-box">

                        <i class="bi bi-building"></i>

                    </div>

                    <h5 class="mt-3">
                        Modern Campus
                    </h5>

                </div>

                <div class="col-md-3">

                    <div class="icon-box">

                        <i class="bi bi-award"></i>

                    </div>

                    <h5 class="mt-3">
                        Best Placements
                    </h5>

                </div>

                <div class="col-md-3">

                    <div class="icon-box">

                        <i class="bi bi-globe"></i>

                    </div>

                    <h5 class="mt-3">
                        Global Exposure
                    </h5>

                </div>

            </div>

        </div>

    </section>

    <!-- Stats -->

    <section class="stats py-5">

        <div class="container">

            <div class="row text-center">

                <div class="col-md-3">

                    <h2>10,000+</h2>

                    <p>Students</p>

                </div>

                <div class="col-md-3">

                    <h2>500+</h2>

                    <p>Faculty</p>

                </div>

                <div class="col-md-3">

                    <h2>100%</h2>

                    <p>Placement Support</p>

                </div>

                <div class="col-md-3">

                    <h2>50+</h2>

                    <p>Programs</p>

                </div>

            </div>

        </div>

    </section>

    <!-- News -->

    <section class="py-5">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="section-title">
                    Latest News
                </h2>

            </div>

            <div class="row g-4">

                <div class="col-lg-4">

                    <div class="card news-card">

                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=1200"
                            class="card-img-top">

                        <div class="card-body">

                            <h5>Admission Open 2026</h5>

                            <p>

                                Applications are now open for all undergraduate and postgraduate programs.

                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="card news-card">

                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1200"
                            class="card-img-top">

                        <div class="card-body">

                            <h5>Annual Tech Fest</h5>

                            <p>

                                Join India's biggest student innovation festival.

                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="card news-card">

                        <img src="https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?q=80&w=1200"
                            class="card-img-top">

                        <div class="card-body">

                            <h5>Campus Placements</h5>

                            <p>

                                Top multinational companies are recruiting students this year.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Testimonials -->

    <section class="testimonial py-5">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="section-title">
                    Student Testimonials
                </h2>

            </div>

            <div class="row">

                <div class="col-lg-6">

                    <div class="card border-0 shadow-sm">

                        <div class="card-body">

                            <p>

                                "The faculty and placement support helped me secure my dream job."

                            </p>

                            <h5>
                                - Rahul Sharma
                            </h5>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="card border-0 shadow-sm">

                        <div class="card-body">

                            <p>

                                "The campus environment is amazing and provides excellent learning opportunities."

                            </p>

                            <h5>
                                - Priya Verma
                            </h5>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- CTA -->

    <section class="py-5 text-center bg-primary text-white">

        <div class="container">

            <h2>
                Start Your Academic Journey Today
            </h2>

            <p class="mb-4">

                Admissions are open for the upcoming session.

            </p>

            <a href="#" class="btn btn-light btn-lg">
                Apply Now
            </a>

        </div>

    </section>
@endsection
