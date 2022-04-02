<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/login.css" />
    <title>Sign up</title>
    <?php
    $message = "";
    $error_message = "";
    include "db.php";
    if ($_POST) {
        $fullName = $_REQUEST['full-name'];
        $email = $_REQUEST['email'];
        $contact = $_REQUEST['contact'];
        $userName = $_REQUEST['user-name'];
        $password = $_REQUEST['password'];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $checkUser = "SELECT `user_name` from `user_details` where user_name='$userName'";
        $userResult = mysqli_query($conn, $checkUser);
        $finalResult = mysqli_num_rows($userResult);
        if ($finalResult > 0) {
            $error_message = "User name already exist try another";
        } else {
            $createUser = "INSERT into `user_details` (`full_name`,`email`,`contact`,`user_name`,`password`) VALUES ('$fullName','$email','$contact','$userName','$hashedPassword')";
            if (mysqli_query($conn, $createUser)) {
                $message = "User created successfully";
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html; charset=iso-8859-1" . "\r\n";
                $headers .= "From: less.secure.email.for.students@gmail.com" . "\r\n";
                $subject = "Welcome to Park Smart";
                $email = "$email";
                $body = "Hello $fullName,<br>You have used this email to sign up to Park Smart.<br><br>Regards,<br>Park Smart Team";
                $sendMail = mail($email, $subject, $body, $headers);
            } else {
                $error_message = "Couldn't create user";
            }
        }
        mysqli_close($conn);
    }
    ?>
</head>

<body>
<?php  include 'navbar/navbar.php';?>
    <div id="login" style="margin-top: 0;">
        <h2 style="text-align: center;">Sign up Form</h2>
        <div class="container">
            <form action="" method="POST" id="signUpForm" onsubmit="event.preventDefault();validation();">
                <label for="full-name">Full Name</label>
                <input type="text" id="full-name" placeholder="Enter your full name" name="full-name">
                <span id="full-name-validation" class="error-message"></span>
                <label for="email">Email</label>
                <input type="text" id="email" placeholder="Enter your email" name="email">
                <span id="email-validation" class="error-message"></span>
                <label for="contact">Contact</label>
                <input type="text" id="contact" placeholder="Enter your contact number" name="contact">
                <span id="contact-validation" class="error-message"></span>
                <label for="user-name">User Name</label>
                <input type="text" id="user-name" placeholder="Create a user name" name="user-name">
                <span id="user-name-validation" class="error-message"></span>
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Create a password" name="password">
                <span id="password-validation" class="error-message"></span>
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" placeholder="Confirm your password" name="confirm-password">
                <span id="confirm-password-validation" class="error-message"></span>
                <span class="backend-error-message"><?= $error_message ?></span>
                <span class="message"><?= $message ?></span>
                <input type="submit" value="Signup">
                <span>Already have an account <a href="login.php" style="color: blue;">Proceed to login</a></span>
            </form>
        </div>
    </div>

    <script>
        function validation(){
    var full_name = document.getElementById('full-name').value;
    var email = document.getElementById('email').value;
    var contact = document.getElementById('contact').value;
    var user_name = document.getElementById('user-name').value;
    var password = document.getElementById('password').value;
    var confirm_password = document.getElementById('confirm-password').value;
    var fullNameValidation = document.getElementById('full-name-validation');
    var emailValidation = document.getElementById('email-validation');
    var contactValidation = document.getElementById('contact-validation');
    var userNameValidation = document.getElementById('user-name-validation');
    var passwordValidation = document.getElementById('password-validation');
    var confirmPasswordValidation = document.getElementById('confirm-password-validation');
    var full_nameREGEXP =/(^[A-Za-z]{3,16})([ ]{0,1})([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})/;
    var full_name_final = full_nameREGEXP.test(full_name);
    var emailREGEXP = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var email_final = emailREGEXP.test(email);
    var user_nameREGEXP = /^[A-Za-z][A-Za-z0-9_]{7,29}$/;
    var user_name_final = user_nameREGEXP.test(user_name);
    isValidated = false;
    if(full_name.trim()==""){
        fullNameValidation.innerHTML = "Full name cannot be empty";
        fullNameValidation.style.display = 'block';
    }
    else if(full_name_final == false){
        fullNameValidation.innerHTML = "Your full name doesn't match standard full name format";
        fullNameValidation.style.display = 'block';
    }
    else{
        isValidated = true;
        fullNameValidation.style.display = 'none';
    }
    if(email.trim()==""){
        emailValidation.innerHTML = "Email cannot be empty";
        emailValidation.style.display = 'block';
    }
    else if(email_final == false){
        emailValidation.innerHTML = "Your email doesn't match standard email format";
        emailValidation.style.display = 'block';
    }
    else{
        isValidated = true;
        emailValidation.style.display = 'none';
    }
    if(contact.trim() == ""){
        contactValidation.innerHTML = "Email cannot be empty";
        contactValidation.style.display = 'block';
    }
    else if(contact.length != 10){
        contactValidation.innerHTML = "Contact must be a 10 digit number";
        contactValidation.style.display = 'block';
    }
    else{
        isValidated = true;
        contactValidation.style.display = 'none';
    }
    if(user_name.trim() == ""){
        userNameValidation.innerHTML = "User name cannot be empty";
        userNameValidation.style.display = 'block';
    }
    else if(user_name.length<8 || user_name.length>28 ){
        userNameValidation.innerHTML = "User name should be between 8 and 28 characters";
        userNameValidation.style.display = 'block';
    }
    else if(user_name_final == false){
        userNameValidation.innerHTML = "User username doesn't match standard username format.";
        userNameValidation.style.display = 'block';
    }
    else{
        isValidated = true;
        userNameValidation.style.display = 'none';
    }
    if(password == ""){
        passwordValidation.innerHTML = "Password cannot be empty";
        passwordValidation.style.display = 'block';
    }
    else if(password.length <8 || password.length>28){
        passwordValidation.innerHTML = "Password must be between 8 and 28 characters";
        passwordValidation.style.display = 'block';
    }
    else{
        isValidated = true;
        passwordValidation.style.display = 'none';
    }
    if (password != confirm_password){
        confirmPasswordValidation.innerHTML = "Your passwords doesn't match";
        confirmPasswordValidation.style.display = 'block';
    }
    else{
        isValidated = true;
        confirmPasswordValidation.style.display = 'none';
    }
    if(isValidated == true){
        document.getElementById('signUpForm').submit();
    }
}
    </script>
</body>


</html>