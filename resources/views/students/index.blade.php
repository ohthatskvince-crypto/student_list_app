
<!DOCTYPE html>
<html>
<head>
    <title>Student List App</title>
</head>
<body>

    <h1>Student List App</h1>

    <a href="{{ route('students.create') }}">Add Student</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Student ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Year Level</th>
            <th>Actions</th>
        </tr>

        @forelse($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->student_id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->course }}</td>
            <td>{{ $student->year_level }}</td>
            <td>
                <a href="{{ route('students.edit', $student->id) }}">Edit</a>

                <form action="{{ route('students.destroy', $student->id) }}"
                      method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        onclick="return confirm('Delete this student?')">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7">No students found.</td>
        </tr>
        @endforelse
    </table>

</body>
</html>
