<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login to your account</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/signin.css">


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body class="boxx">
<div class="signin-form">
    <form action="" method="post">
        <div class="form-header">
            <h2>Sign In</h2>
            <p>Login to MyChat</p>
        </div>
        <div class="form-group">
            <label for="">Email :</label>
            <input type="email" name="email" class="form-control" placeholder="example@site.com" autocomplete="off"
                   required>
        </div>
        <div class="form-group">
            <label for="">Password :</label>
            <input type="password" name="password" class="form-control" placeholder="Enter Password" autocomplete="off"
                   required>
        </div>
        <div class="small">Forgot password
            <a href="forgot_pass.php">Click Here</a>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Sign in</button>
        </div>
        <?php //include ("signin_user.php"); ?>
    </form>
    <div class="text-center small" style="color: #67428B;">Don't have an account ? <a href="signup.php">Create one</a></div>
</div>

<!--Water Ripples-->
<script>
    jQuery(document).ready(function () {
        jQuery('.box').ripples({
            resolution:700,
            dropRadius:20,
            perturbance:5
        })
    });
</script>
</body>
</html>
