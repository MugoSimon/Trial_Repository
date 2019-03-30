<?php session_start(); ?>
<?php require'database/database.php'; ?>

	<!DOCTYPE html>
<html>
<head>
  <title>login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="carousel.css">
</head>
<body>
  <fieldset>
<legend class="legend">
<h2>Login Form</h2>
</legend>
<form action="login.php" method="POST">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <a href="register.php"><b><i>Im yet a member</i></b></a>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
  
</form>
</fieldset>
</body>
</html>

<?php
      if (isset($_POST['submit'])) {
         $username = mysqli_real_escape_string($conn, $_POST['username']);
         $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($username) || empty($password) ) {
            header("Location:login.php");
            exit();
        }else{
            $query = "SELECT * FROM `members` WHERE username='$username' ";
            $result = mysqli_query($conn, $query);
            $checkresult = mysqli_num_rows($result);

            if ($checkresult < 1) {
                header("Location:login.php");
                exit();
            }else{
              if ($row = mysqli_fetch_assoc($result) ) {
                  // de-hashing the password
                  $dehashpassword = password_verify($password, $row['password']);
                  if ($dehashpassword == false ) {
                      header("Location:login.php");
                      
                      exit();
                  }elseif ($dehashpassword == true) {
                     // login the user
                      $_SESSION ['firstname'] = $row['firstname'];
                      $_SESSION ['lastname'] = $row['lastname'];
                      $_SESSION ['username'] = $row['username'];              
                      $_SESSION ['email'] = $row['email'];
                      header("Location: front.php");
                  }
              }
            }
        }
      }
?>