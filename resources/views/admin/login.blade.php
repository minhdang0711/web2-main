<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/web2-main/resources/css/style.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="box form-box">
            <header>Sign in for Admin</header>
            <form action="" method="post">

                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="field input">
                    <label for="username">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="field ">

                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Don't have account? <a href="{{route('admin.register')}}">Sign Up Now</a>
                </div>

            </form>
        </div>
    </div>

</body>

</html>