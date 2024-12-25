<?php 
    include "database/Evenbase.php";
    session_start();
    $login_message = "";
    if (isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
       

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

        $result = $db->query($sql); 

        if($result->num_rows>0){
            $data = $result->fetch_assoc();
            header("location: index.php");
        }else{
            $login_message="username atau kata sandi salah";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Styesheet/Login.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="head-wrap">
      <div class="wrapper">
        <div class="wrapper2">
          <div id="wrapper_logo-headline">
            <img src="Picture/Logo.png" alt="" width="200px" id="logo" />
            <p>Enhance your knowledge by attending campus events</p>
          </div>
        </div>
      <form action="Login.php" method="POST">
          <div class="judul">
            <h1>Welcome to the beginning of something great!</h1>
          </div>
          <div class="input-box">
            <p>Username</p>
            <input type="text" name="username" id="" placeholder="Username" required />
          </div>
          <div class="input-box">
            <p>Password</p>
            <input type="password" name="password" placeholder="Password" />
          </div>
          <i style="color: red;"><?= $login_message ?></i>
          <div class="under-input">
            <button class="btn" type="submit" name="login">Login</button>
            <div class="forgot-password">
              <!-- <a href="index.php">Back to Home</a> -->
            </div>

            <div class="register-link">
              <p>
                Dont have an account? <a href="Register.php">Register now!</a>
              </p>
            </div>
          </div>
      </form>
      </div>
    </div>
  </body>
</html>
