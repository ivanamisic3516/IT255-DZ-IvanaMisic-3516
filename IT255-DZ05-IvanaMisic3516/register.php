<?php include(server.php)?>
<!DOCTYPE html>
<html>
    <head>
        <title> Registration </title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h4>Registration</h4>
</div>
    <form action="register.php" method="POST">

    <?php include(errors.php)?>
        <div>
            <label for="username">Username : </label>
            <input type="text" name="username" required>
        </div>
        <div>
            <label for="email">Email : </label>
            <input type="text" name="email" required>
        </div>
        <div>
            <label for="password">Password : </label>
            <input type="password" name="password_1" required>
        </div>
        <div>
            <label for="password">Confirm password : </label>
            <input type="password" name="password_2" required>
        </div>
        <button type="submit">Submit</button>

        <p>Already a user?<a href="log.php"><b>Log in</b></a></p>
</form>
</div>
</body>
</html>