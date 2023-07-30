<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <div class="container">
        <form action="login_process.php" method="post">
            <h2>login</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error">
                    <?php echo $_GET['error']; ?>
                </p>
            <?php  } ?>


            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required> <br> <br>

            <button type="submit" name="login">Login</button>
            <p>Already have an account? <a href="register.php">Register</a></p>



    </div>

</body>

</html>