<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New account</title>
</head>

<body>
    <h2>New account </h2>
    <form method="POST" action="{{ route('user.store') }}">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            @error('name')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            @error('email')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            @error('password')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
            @error('password_confirmation')
                <small>{{ $message }}</small>
            @enderror
        </div>
        <div>
            <label for="user_type">Role:</label>
            <select name="user_type" id="user_type">
                <option value="Student">Student</option>
                <option value="Marketing Coordinator">Marketing Coordinator</option>
                <option value="University Marketing Manager">University Marketing Manager</option>
                <option value="Administrator">Administrator</option>
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
        <button type="submit" class="btn-btn primary">submit</button>
    </form>
</body>

</html>
