<?php
	include 'database/database.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
	<link rel="stylesheet" type="text/css" href="carousel.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
    <div id="wrap">
    <h1 align="center">Register</h1>
<div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card border-secondary">
                        <div class="card-header">
                            <h3 class="mb-0 my-2">Sign Up</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" action="register.php" method="POST">
                                <div class="form-group">
                                    <label for="inputName">firstame</label>
                                    <input type="text" class="form-control" id="inputName" placeholder="enter firstname" name="firstname">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">lastname</label>
                                    <input type="text" class="form-control" id="inputName" placeholder="enter lastname" name="lastname">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Username</label>
                                    <input type="text" class="form-control" id="inputName" placeholder="apply nickname" required="" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3">Email</label>
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="email@gmail.com" required="" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3">Password</label>
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="password" title="At least 6 characters with letters and numbers" required="" name="password" >
                                </div>
                                <div class="form-group">
                                    <label for="inputVerify3">Verify</label>
                                    <input type="password" class="form-control" id="inputVerify3" placeholder="confirm password" required="" name="confirm_password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-right" name="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>

<?php
  if (isset($_POST['submit']) ) {
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $conf_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

        /*checking whether the user's email is already used.*/
        $query = "SELECT * FROM `email` WHERE email = '$email' ";
        $result = mysqli_query($conn,$query);
        $check_result = mysqli_num_rows($result);

           if($check_result>0){
                
                 exit();
                      }
                       else{
                                 /*hashing the password*/
                           $hashpassword = password_hash($password, PASSWORD_DEFAULT);
                            /*INSERTING DETAILS INTO the database */
                            $query = "INSERT INTO `members` (firstname,lastname,username,email,password) VALUES ('$firstname','$lastname','$username','$email','$hashpassword')";
                           $result = mysqli_query($conn, $query);
                           header("Location: login.php");

       /*
             $query = "INSERT INTO `members` (firstname,lastname,username,email,password) VALUES ('$firstname','$lastname','$username','$email','$password')";
             $result = mysqli_query($conn, $query);
             header("Location: index.php");
      */
        } 
  }
?>