<?php session_start(); ?>

<?php
include('database.php');

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM nurse_account WHERE password='$password' AND username='$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $_SESSION['fullname'] = $row['fullname'];
        if ($row['position'] == "admin") {
            header('location: admin/index_admin.html');
        } elseif ($row['position'] == "stocker") {
            header('location: stocker/index_in.php');
        } elseif ($row['position'] == "register") {
            header('location: registration/registration.php');
        } 
        
    } else {
        echo "<script>alert('Invalid Credentials');</script>";
    }
}

    
?>





<html>
<head>
<link href="stylelogin.css" rel="stylesheet" />
<link rel="shortcut icon" href="img/spa.ico" type="image/x-icon">
</head>
<body>

<?php include('database.php'); ?>
<div class="form-wrapper">
<form action="#" method="post">
   <h3 style="text-align: center;">WELCOME!</h3>
    <div class="form-item">
        <input type="text" name="username" required="required" placeholder="ID" autofocus required></input>
    </div>
    <div class="form-item">
        <input type="password" name="password" required="required" placeholder="Password" required></input>
    </div>
    <div class="button-panel">
        <input type="submit" class="button" title="Log In" name="login" value="login">
    </div>
  <div class="reminder">
    <p><a>Welcome to Dr. Parcon's Hospital Nurse's ?</a></p>
     <p> <a href="#"> Be a part of team</a></p>
    <p><a href="#">Forgot password?</a></p>

   
  </div>
</form>
</div>



</body>
</html>


<script>
// Get the login button and add a click event listener
var loginButton = document.querySelector('.button');
loginButton.addEventListener('click', function() {

  // Get the loading div and display it
  var loadingDiv = document.querySelector('.loading');
  loadingDiv.style.display = 'block';

  // Disable the login button to prevent multiple clicks
  loginButton.disabled = true;

  // Submit the form
  this.form.submit();
});
</script>