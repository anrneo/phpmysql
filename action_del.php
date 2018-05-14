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
    $stmt = $conn->prepare("DELETE FROM datospersonales WHERE id='".intval($_GET['id'])."'"); 

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