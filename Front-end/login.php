<!DOCTYPE html>
<html lang="en">
<head>
    <title>Make an Account to Review Movies</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
    <h2>Login</h2>
    </div>

    <form method="post" action="../Back-end/login.php">
        <div class="input-group">
            <label>username</label>
            <input type="text" name="username">
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>

        <div class="input-group">
            <button type="submit" name="Login" class="btn">Login</button>
        </div>
        <p>
            Not a member yet? <a href="register.php">Sign up</a>
        <p>
    <form>
    
</body>
</html>