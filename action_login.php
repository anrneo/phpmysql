<?php

include 'conndb.php';

    $email=$_POST['email'];
    $pass=$_POST['pass'];

 
     $sql = "SELECT * FROM login WHERE email='".$email."' and pass='".$pass."'";

     $result = $conn->query($sql);

     if ($result->num_rows > 0) {
        header('Location: usuarios.php');   
     }else {
        echo "No es un usuario registrado";
    }
    $conn->close();
?>