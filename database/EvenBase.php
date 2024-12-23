<?php 
    $hostname ="localhost";
    $username ="root";
    $password ="";
    $database_name ="evenbase";

    $db = mysqli_connect($hostname,$username,$password,$database_name);

    if($db->connect_error){
        echo "error database connect";
    }

?>