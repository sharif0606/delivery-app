<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="box">
        <form method="POST">
            <h2>Log In</h2>
            <div class="inputbox">
                <input type="text" required="required" name="user_name">
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="password" required="required" name="password">
                <span>Password</span>
                <i></i>
            </div>
            <div class="links">
                <a href="#"></a>
                <a href="signup.php">Signup</a>
            </div>
            <input type="submit" value="Log In">
        </form>
    </div>
</body>

</html>