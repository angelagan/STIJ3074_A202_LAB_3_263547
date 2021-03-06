<?php
// include "dbconnect.php";

?>
<!DOCTYPE html>
<html>

<head>
	<title>Forgot Password Form</title>
	<link rel="shortcut icon" type="image" href="../images/fairy_mart_logo.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="../js/validate.js"></script>
	<link rel="stylesheet" href="../css/sty.css">
</head>

   <body>
        <div class="header">
            <img src="../images/fairy_mart_logo.png" />
            <h1>Fairy Mart</h1>
            <p>We help you in your diet &#128512; </p>
        </div>

        <div class="navbar">
            <a href="../html/login.html" class="right">Back to Log In <i class="fa fa-sign-in"></i></a>
        </div>

        <div class="main">
            <h2>Forgot Password</h2>
            <div class="container">
                <form name="forgotPasswordForm" action="../php/forgot_password.php" onsubmit="return validateForgotPasswordForm()" method="post">
                
                <div class="row">
                    <div class="col-25">
                        <i class="fa fa-envelope"></i>
                        <label for="femail"><b>Email</b></label>
                    </div>
                    <div class="col-75">
                     <input type="text" id="idemail" name="email" placeholder="Your Email..">
                  </div>
               </div>

               <div class="row">
                  <div class="col-25">
                     <i class="fa fa-lock"></i>
                     <label for="lname"><b>Password</b></label>
                  </div>
                  <div class="col-75">
                     <input type="password" id="idpass" name="password" placeholder="Your Password..">
                  </div>
               </div>
               <br>

               <div class="row">
                  <input name="submit" type="submit" value="Change Password">
               </div>

                </form>
            </div>
        </div>

        <div class="footer">
            <footer>&copy; Copyright 2021 Fairy Mart. Design By Angela</footer>
        </div>


      <?php
         $conn = mysqli_connect("localhost","doubleks_fairy_martadmin","E8OMX979P9") or die("Unable to connect");
         mysqli_select_db($conn,"doubleks_fairy_mart");
      
      if(isset($_POST['submit'])){
        $email = trim($_POST['email']);
        $password = trim(sha1($_POST['password']));
      if(mysqli_query($conn,"UPDATE tbl_user SET password='$password' WHERE email='$email'")){
        ?>

        <?php
         echo '<script type="text/javascript"> alert("Password Update Successfully")</script>';
         header("refresh:1; url=../html/login.html");
         ?>

         <?php
      }else{
        echo 'No Result';
      }
    }
      ?>

   </body>
</html>