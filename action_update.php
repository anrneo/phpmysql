<?php

// Start the session
session_start();
if(!isset($_SESSION['usuario'])){
    header('Location:index.php');
}

$servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "usuarios";

    try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare statement
    $stmt = $conn->prepare("UPDATE datospersonales SET cc='".$_POST['cc']."', nombre='".$_POST['nombre']."', apellido='".$_POST['apellido']."', edad='".$_POST['edad']."' 
                            WHERE id='".$_POST['id']."'"); 

    // execute the query
    $stmt->execute();

    if ($stmt->rowCount()) {

        header('Location: usuarios.php');   

        }
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;

    
    ?>