
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sign in</title>
</head>

<body>
    <div class="main">
        <p class="sign">Sign in</p>
        <form class="form1" method="POST" action='PHP_Actions/login.php'>
            <input required title="Enter Your Email" class="un" type="text" placeholder="Email" name="email">
            <input required title="Enter Your Password" class="pass" type="password" placeholder="Password"
                name="password">
            <button class="submit" name="submit" type="submit">Log In</button>
            <p class="signup">Don't have an account? <a href="register.php">Sign up</p>
        </form>
    </div>

</body>

</html>
