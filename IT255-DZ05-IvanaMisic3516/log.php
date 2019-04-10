<?php include(server.php)?>
<!DOCTYPE html>
<html>
    <head>
        <title> Login </title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h4>Login</h4>
</div>
    <form action="log.php" method="POST">
        <div>
            <label for="username">Username : </label>
            <input type="text" name="username" required>
        </div>
        <div>
            <label for="password">Password : </label>
            <input type="password" name="password_1" required>
        </div>
        <button type="submit">Log in</button>

        <p>Not a user?<a href="register.php"><b>Register Here</b></a></p>
</form>
</div>
</body>
</html>