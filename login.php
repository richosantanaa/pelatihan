<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> My Unpam </title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <section>
        <div class="login-box">
        <form action="dashboard.php" method="post">
                <h2>LOGIN</h2>
                <div class="input-box">
                    <input type="text" name="userid" id="userid" required>
                    <label for="">Userid</label>
                </div>
                <div class="input-box">
                    <input type="password" name="password" id="password" required>
                    <label for="">Password</label>
                </div>
                <button>Login</button>
                <div class="register-link">
                    <p>Don't have a Account? <a href="#">Register</a></p>
                </div>
            </form>
        </div>
    </section>
</body>
</html>