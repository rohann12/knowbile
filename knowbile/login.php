<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/login.css" />
    <title>Login</title>
    <?php
    session_start();
    $error_msg = "";
    $error_msg2 = "";
    include 'db.php';
    if ($_POST) {
        $user_name = $_REQUEST['user-name'];
        $password = $_REQUEST['password'];
        $login_check = "select *  from user_details where `user_name`='$user_name'";
        $result = mysqli_query($conn, $login_check);
        $check = mysqli_num_rows($result);
        if ($check > 0) {
            $row = mysqli_fetch_assoc($result);
            $pass = $row['password'];
            $password_validated = password_verify($password, $pass);
            if ($password_validated == true) {
                if ($row['is_admin'] == 1) {
                    $_SESSION['user-name'] = $row['user_name'];
                    header('location:admin.php');
                } else {
                    $_SESSION['user-name'] = $row['user_name'];
                    header('location:after-login.php');
                }
            } else {
                $error_msg2 = "Invalid Password";
            }
        } else {
            $error_msg = "User Name doesn't exist";
        }
    }
    mysqli_close($conn);
    ?>
</head>

<body>
    <?php  include 'navbar/navbar.php';?>
<div id="login-box">
    <h2 style="text-align: center;">Login Form</h2>

    <form>
        <!-- Link Php Here -->
        <label for="user-name"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="user-name">

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password">
        <span class="backend-error-message"><?= $error_msg2 ?></span>

        <button type="submit" class="loginbtn">Login</button>
        <button class="signbtn">
            <a href="signup.php">Create an account</a>
        </button>
        <button type="button" class="cancelbtn"><a href="index.html">Cancel</a></button>
    </form>

</div>


</html>