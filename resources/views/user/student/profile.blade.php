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
        <button type="submit">submit</button>
    </form>
</body>

</html>
