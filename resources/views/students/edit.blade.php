
<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

    <h1>Edit Student</h1>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <p>Student ID:</p>
        <input type="text" name="student_id"
            value="{{ $student->student_id }}" required>

        <p>Name:</p>
        <input type="text" name="name"
            value="{{ $student->name }}" required>

        <p>Email:</p>
        <input type="email" name="email"
            value="{{ $student->email }}" required>

        <p>Course:</p>
        <input type="text" name="course"
            value="{{ $student->course }}" required>

        <p>Year Level:</p>
        <select name="year_level" required>
            @foreach(['1st Year', '2nd Year', '3rd Year', '4th Year'] as $year)
                <option value="{{ $year }}"
                    {{ $student->year_level == $year ? 'selected' : '' }}>
                    {{ $year }}
                </option>
            @endforeach
        </select>

        <br><br>

        <button type="submit">Update Student</button>
        <a href="{{ route('students.index') }}">Cancel</a>
    </form>

</body>
</html>
