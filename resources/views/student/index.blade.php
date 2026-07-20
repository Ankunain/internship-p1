@extends('user.layout')

@section('content')
    <div class="container py-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Students List</h2>

            <a href="{{ route('student.create') }}" class="btn btn-primary">
                Add Student
            </a>
        </div>

        <div class="table-responsive">

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


    <script>
        function deleteData(id) {


            if (confirm('Are you sure you want to delete this item.')) {
                $.ajax({
                    type: "POST",
                    url: "{{ route('student.delete') }}",
                    data: {
                        id: id
                    },
                    success: function(response) {
                        alert('Data Deleted Successfully.');
                        window.location.reload();
                    }
                });
            }

        }
    </script>
@endsection
