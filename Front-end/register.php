<?php
require "header.php";
?>

    <div class="header">
    <h2>Register</h2>
    </div>

    <form method="post" action="../Back-end/register.php">
        <div class="input-group">
            <label>username</label>
            <input type="text" name="username">
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>

        <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>
        </div>
        <p>
            Alredy a member? <a href="login.php">Sign in</a>
        <p>
    <form>
    
</body>
</html>