<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <h2>Register</h2>
    <form method="POST" action="">
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
        <button type="submit">Register</button>
    </form>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/web2-main/resources/css/style.css">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <div class="box form-box">
            <header>Sign up</header>
            <form action="" method="post">

                <div class="field input">
                    <label for="first name">First Name</label>
                    <input type="text" name="first name" id="first name" required>
                </div>
                <div class="field input">
                    <label for="last name">Last Name</label>
                    <input type="text" name="last name" id="last name" required>
                </div>
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="username">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="field input">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required>
                </div>
                <div class="field input>
                    <label for=" user_type>Role</label>
                    <select name="user_type" id="user_type">
                        <option value="student">Student</option>
                        <option value="Marketing Coordinator">Marketing Coordinator</option>
                        <option value="University Marketing Manager">University Marketing Manager</option>
                        <option value="administrator">Administrator</option>
                    </select>
                </div>
                <div class="field input>
                    <label for=" faculty>Faculty</label>
                    <select name="faculty" id="faculty">
                        <option value="Business administration">Business administration</option>
                        <option value="Graphics and Digital Design">Graphics and Digital Design</option>
                        <option value="Information technology">Information technology</option>
                    </select>
                </div>

                <div class="field ">

                    <input type="submit" class="btn" name="submit" value="Sign up" required>
                </div>
                <div class="links">
                    Already a member? <a href="/web2-main/resources/views/user/login.blade.php">Sign in</a>
                </div>

            </form>
        </div>
    </div>

</body>

</html>