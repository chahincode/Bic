<?php require "assets/DBFunctions.php" ?>
<?php
if (isset($_POST['login'])) {
    $user = $_POST['email'];
    $pass = $_POST['password'];
    $con = new mysqli('localhost', 'root', '', 'store');

    $result = $con->query("select * from users where email='$user' AND password='$pass'");
    if ($result->num_rows > 0) {
        session_start();
        $data = $result->fetch_assoc();
        $_SESSION['userId'] = $data['id'];
        $_SESSION['bill'] = array();
        header('location:index.php');
    } else {
        echo
        "<script>
     		\$(document).ready(function(){\$('#error').slideDown().html('Login Error! Try again.').delay(3000).fadeOut();});
     	</script>
     	";
    }
}
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/customStyle.css">
        <script src='js/jquery.js'></script>
        <script src='js/bootstrap.min.js'></script>
        <link rel="stylesheet" type="text/css" href="Pages/Login/style.css">
    </head>
    <body>
    <div class="login-box">
        <div class="well well-sm center head-title">
            <h3 class="center">Login</h3>
        </div>

        <div class="well well-sm login-container" >
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="" method="post">
                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </form>
        </div>
        <br>
        <div class="alert alert-danger alert-container" id="error"></div>
        <div class="empty-div"></div>

        <!-- /.login-box-body -->
    </div>
    </body>
    </html>


