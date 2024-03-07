<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="box">
        <form method="post">
            <h2>Sign up</h2>
            <div class="inputbox">
                <input type="text" required="required" name="user_name">
                <span>User Name</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="text" required="required" name="email">
                <span>Email</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="password" required="required" name="password">
                <span>Password</span>
                <i></i>
            </div>
            <input type="submit" value="Signup">
        </form>
    </div>
</body>

</html>