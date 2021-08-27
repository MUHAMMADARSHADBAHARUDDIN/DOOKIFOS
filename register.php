<?php include('connect.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>SignUp page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head> 
<body>
    <form method="post" action="register.php">
        <h1>Sign Up</h1>

        <p>Please fill this form to create an account</p>
        <label>Username</label>
        <input type="text" placeholder="Username" id="username" name="username"/>
        <br />
        <label>Email</label>
        <input type="text" placeholder="Email" id="email" name="email"/>
        <br />
        <label>Password</label>
        <input type="text" placeholder="Password" id="password" name="password_1"/>
        <br />
        <label>Confirm Password</label>
        <input type="text" placeholder="Re-Password" id="password_2" name="password_2"/>

        <p>By creating an account you agree to our <a href="#">Terms and Privacy </a></p>

        <button type="submit" name = "signup-btn" class="btn btn-primary active">Sign Up</button>
        <p>Already have an account? <a href="login.php">Log In</a></p>
    </form>
</body>
</html>