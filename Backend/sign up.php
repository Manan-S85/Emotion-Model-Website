<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>FREd</title>

  <!-- slider stylesheet -->
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/signup.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<body>
    <div id="login-box">
        <div class="left">
          <h1>Sign up</h1>
          
          <form action="sign up.php" method = 'post'>
            <input type="text" name="username" placeholder="username" />
            <input type="text" name="email" placeholder="E-mail" />
            <input type="password" name="password" placeholder="Password" />
            <input type="password" name="password2" placeholder="Retype password" />
            
            <input type="submit" name="signup_submit" value="Sign me up" />
          </form>  
        </div>
        
        <div class="right">
          <!-- <span class="loginwith">Sign in with<br />social network</span>
          
          <button class="social-signin facebook">Log in with facebook</button>
          <button class="social-signin twitter">Log in with Twitter</button>
          <button class="social-signin google">Log in with Google+</button>
        </div> 
        <div class="or">OR</div>-->
      </div>
</body>

<?php
$conn = mysqli_connect("localhost", "root", "");
if (isset($_POST['signup_submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    // You can add further validation here, e.g., checking for a valid email format.

    if ($password === $password2) {
        // Passwords match, proceed with registration
        $sql = "INSERT INTO websitesignup.signupdetails (username, email, password) VALUES ('$username', '$email', '$password')";
        if (mysqli_query($conn, $sql)) {
            header('Location: http://localhost/FREdMeds/login.php'); // Redirect to a success page
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "<script>
              alert('Passwords do not match.');
         </script>";
    }
}
?>
