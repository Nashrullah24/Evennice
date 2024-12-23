<?php  
    include "database/EvenBase.php";
    
    $register_message = "";

    if(isset($_POST["signup"])){
        $username = $_POST["username"]; 
        $password = $_POST["password"];
        $email = $_POST["email"];
        

        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email','$password')";
        
        if($db->query($sql)){
            $register_message= "your account has been created";
        }
        else{
            $register_message= "Data failed to register, please try again later";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evenice - Sign Up</title>
    <link rel="stylesheet" href="Styesheet/Register.css">
</head>
<body>

    <div class="container">
        <div class="form-container">
            <h2>Create a new account</h2>
            <form action="Register.php" method="POST">
                <label for="email" >Email</label>
                <input type="email" id="email"  name="email" placeholder="Email">

                <label for="username" >Username</label>
                <input type="text" id="username"  name="username" placeholder="username">
                
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Password" name="password">
                
                <div class="button-container">
                    <button type="submit" name="signup">Sign up</button>
                </div>
                <a href="Login.php">Back to Login</a>
                <i><?= $register_message ?></i>
            </form>
        </div>
        <div class="illustration">
            <img src="Picture/Register-icon.jpg" alt="Illustration">
        </div>
    </div>
</body>
</html>
