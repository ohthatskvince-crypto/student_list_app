
<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>

    <h1>Add Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <p>Student ID:</p>
        <input type="text" name="student_id" required>

        <p>Name:</p>
        <input type="text" name="name" required>

        <p>Email:</p>
        <input type="email" name="email" required>

        <p>Course:</p>
        <input type="text" name="course" required>

        <p>Year Level:</p>
        <select name="year_level" required>
            <option value="">Select Year</option>
            <option value="1st Year">1st Year</option>
            <option value="2nd Year">2nd Year</option>
            <option value="3rd Year">3rd Year</option>
            <option value="4th Year">4th Year</option>
        </select>

        <br><br>

        <button type="submit">Save Student</button>
        <a href="{{ route('students.index') }}">Cancel</a>
    </form>

</body>
</html>
