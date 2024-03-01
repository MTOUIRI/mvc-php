<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Contenu/style.css" />
    <title>Registration Form</title>
</head>
<body>
<div class="wrapper">
        <section class="form signup">
            <h1 id="register">Register</h1>
            <form action="#" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class=" field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class=" field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                </div> 
                    <div class=" field input">
                        <label>Email Adress</label>
                        <input type="text" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class=" field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter new password" required>
                        <i class="fas fa-eye"></i>
                    </div>        
                    <div class=" field button">
                        <input type="submit" value="Continue to login">
                    </div>
            </form>
            <div class="link">Already signed up? <a href="index.php">Login now</a></div>
        </section>
        <footer id="piedBlog">
                Registration Form réalisé avec PHP, Javascript et Ajax.
        </footer>
    </div>
    <script src="javascript/signup.js"></script>
    <script src="javascript/pass-show-hide.js"></script>
</body>
</html>