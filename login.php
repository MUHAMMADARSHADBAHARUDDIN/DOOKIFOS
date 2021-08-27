<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>LogIn page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    <form method="post" action="login.php">
       <?php include('errors.php'); ?>
        <h1>LogIn</h1>

        
        <hr />
        <label>Username</label>
        <input type="text" placeholder="Username" id="username" name="username" />
        <br />
        <label>Password</label>
        <input type="text" placeholder="Password" id="password" name="password" />
        <br />
        

        <button type="submit" name = "login-btn" class="btn btn-primary active">Sign Up</button>
        <p>Did not have an account? <a href="register.php">Sign Up</a></p>
    </form>
</body>
</html>