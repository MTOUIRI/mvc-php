<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Contenu/style.css" />
    <title>Login</title>
</head>
<body>
<div class="wrapper">
        <section class="form login">
            <h1 id="login">Login</h1>
            <form action="#">
                <div class="error-text"></div>
                    <div class=" field input">
                        <label>Email Adress</label>
                        <input type="text" name="email" placeholder="Enter your email">
                    </div>
                    <div class=" field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter your password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class=" field button">
                        <input type="submit" value="Continue to Our Blog">
                    </div>
            </form>
            <div class="link">Not yet signed up? <a href="registration.php">Signup now</a></div>
        </section>
        <footer id="piedBlog">
                Login Form réalisé avec PHP, Javascript et Ajax.
        </footer>
    </div>
    <script src="javascript/login.js"></script>
    <script src="javascript/pass-show-hide.js"></script>
</body>
</html>