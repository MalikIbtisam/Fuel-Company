<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="script.js"></script>
    <title>Login</title>
</head>

<body class="common-body">
    <?php include 'header.php'; ?>
    <div class="login-container">
        <h2>Login</h2>
        <div id="error-message" class="error"></div>
        <form id="loginForm" method="POST" action="fuel-quote-form.php" onsubmit="return validateLogin()">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            <div class="form-group">
                <label>Don't have an account yet? <a href="register.php">Register</a></label>
                <!-- <button type="button" onclick="location.href='register.php'">Register</button> -->
            </div>
        </form>
    </div>
</body>
</html>