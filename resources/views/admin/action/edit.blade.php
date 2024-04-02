<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h2>Edit :{{ $user->name }}</h2>
    <form method="POST" action="{{ route('user.update', $user->id) }}">
        @csrf @method('PUT')
        <div>
            <label for="name">Name: {{ $user->name }}</label>
        </div>
        <div>
            <label for="email">Email: {{ $user->email }}</label>
        </div>
        <div>
            <label for="user_type">Role:</label>
            <select name="user_type" id="user_type">
                <option value="student">Student</option>
                <option value="Marketing Coordinator">Marketing Coordinator</option>
                <option value="University Marketing Manager">University Marketing Manager</option>
                <option value="administrator">Administrator</option>
            </select>
        </div>
        <div>
            <label for="faculty">faculty</label>
            <select name="faculty" id="faculty">
                <option value="Business administration">Business administration</option>
                <option value="Graphics and Digital Design">Graphics and Digital Design</option>
                <option value="Information technology">Information technology</option>
            </select>
        </div>
        <button type="submit">submit</button>
    </form>
</body>

</html>
