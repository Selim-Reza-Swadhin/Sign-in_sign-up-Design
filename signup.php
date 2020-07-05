<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Account</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/signup.css">

    <!--typed js-->
    <script src="assets/typed.min.js" type="text/javascript"></script>
    <script src="assets/demos.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--Water Ripples-->
    <script type="text/javascript" src="js/jquery.ripples-min.js"></script>
</head>
<body class="box">
<div class="signup-form">
    <form action="" method="post">
        <div class="form-header">
            <h2>Sign Up</h2>
            <!--            <p>Fill out the form and start chating with your friends.</p>-->
            <div id="typed-strings">
                <p>Fill out the form and start...</p>
                <p>Chating with your friends.</p>
            </div>
            <span id="typed" style="white-space:pre; font-size: 20px;"></span>
        </div>
        <div class="form-group">
            <label for="">Username :</label>
            <input type="text" name="user_name" class="form-control" placeholder="Example : swadhin" autocomplete="off"
                   required>
        </div>
        <div class="form-group">
            <label for="">Password :</label>
            <input type="password" name="user_pass" class="form-control" placeholder="Enter Password Example : xyz12345"
                   autocomplete="off"
                   required>
        </div>
        <div class="form-group">
            <label for="">Email Address :</label>
            <input type="email" name="user_email" class="form-control" placeholder="example@site.com" autocomplete="off"
                   required>
        </div>
        <div class="form-group">
            <label for="">Country :</label>
            <select class="form-control" name="user_country" id="" required>
                <option disabled="">Select a Country</option>
                <option>Bangladesh</option>
                <option>UK</option>
                <option>US</option>
                <option>India</option>
                <option>France</option>
                <option>Pakistan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Gender :</label>
            <select class="form-control" name="user_gender" id="" required>
                <option disabled="">Select your Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select>
        </div>
        <div class="form-group">
            <label style="width: 327px;" for="">Choose Your Profile Picture :
                <input type="file" class="form-control" name="" id="">
            </label>
        </div>
        <div>
            <label for=""><input type="checkbox" name="" required> I accept the <a href="#">Terms of Use</a> &amp; <a
                        href="#">Privacy Policy</a></label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign up</button>
        </div>
        <?php //include ("signup_user.php"); ?>
    </form>
    <div class="text-center" style="color: #0f0f0f;">Already have an account ? <a href="signin.php">Signin here</a>
    </div>
</div>

<!--Water Ripples-->
<script>
    jQuery(document).ready(function () {
        jQuery('.box').ripples({
            resolution:500,
            dropRadius:10,
            perturbance:0.5
        })
    });
</script>
</body>
</html>

