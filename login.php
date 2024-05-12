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
    <title></title>
    <link rel="stylesheet" type="text/css" href="Pages/Login/style.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>


<body>
    <div class="main">
        <div class="logo">
            <h2>The Providers</h2>
        </div>
        <div class="signin">
            <h1>Welcome!</h1>
            <p>Sign into your account</p>
            <form action="" method="post">
                <label>Username</label>
                <i class="far fa-user">
                    <input type="email" name="email" class="form-control" style="background:#3b3e87; color:#fff"
                        placeholder="Email" required></i>
                <label>Password</label>
                <i class="fas fa-unlock-alt">
                    <input type="password" name="password" class="form-control" style="background:#3b3e87; color:#fff"
                        placeholder="Password" required></i>

                <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Login</button>

            </form>
        </div>
    </div>
</body>

</html>