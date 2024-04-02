<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account List</title>
</head>

<a href="{{ route('user.create') }}" class="btn succes">New Account</a>

<body>
    <h1>Account List</h1>
    <ul>
        @foreach ($user as $user)
            <li>Id :{{ $user->id }}</li>
            <li>Name :{{ $user->name }}</li>
            <li>Email:{{ $user->email }}</li>
            <li>Role:{{ $user->user_type }}</li>
            <li>faculty:{{ $user->faculty }}</li>
            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                @csrf @method('DELETE')
                <a href="{{ route('user.edit', $user->id) }}" class="btn small promary">Edit</a>
                <button class="btn small promary">Delete</button>
            </form>
        @endforeach
    </ul>
</body>

</html>
