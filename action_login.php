<?php

// Start the session
session_start();

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "usuarios";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $email=htmlentities(addslashes($_POST['email']));
    $pass=htmlentities(addslashes($_POST['pass']));

    // Prepare statement
    $stmt = $conn->prepare("SELECT * FROM LOGIN where email='".$email."' and pass='".$pass."'"); 
    // execute the query
    $stmt->execute();

    if ($stmt->rowCount()) {

        $_SESSION['usuario']=$_POST['email'];

       header('Location:usuarios.php'); 

    }else {
        
       echo "No es un usuario registrado";
   }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>