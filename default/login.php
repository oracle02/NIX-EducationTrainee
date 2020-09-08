<?php
if (isset($_POST['email'], $_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<header class="header">
    <h1>Perfect site</h1>
    <p>Site description</p>
</header>
<div class="wrapper">

    <div class="col-md-6 login-form-2">
        <h3>Login for Form 2</h3>
        <form>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email *" value="" />
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Your Password *" value="" />
            </div>
            <div class="form-group">
                <input type="submit" class="btnSubmit" value="Login" />
            </div>
            <div class="form-group">

                <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
            </div>
        </form>
    </div>



</div>
<footer class="footer">
    <div class="container">
        <p>&copy; Copyright by Anton 2020</p>
    </div>
</footer>
</body>
</html>