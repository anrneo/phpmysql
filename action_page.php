<?php
// Start the session
session_start();
if(!isset($_SESSION['usuario'])){
    header('Location:index.php');
}


    $cc=htmlspecialchars($_POST['cc']);
    $nombre=htmlspecialchars($_POST['nombre']);
    $apellido=htmlspecialchars($_POST['apellido']);
    $edad=htmlspecialchars($_POST['edad']);

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "usuarios";

    try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare statement
    $stmt = $conn->prepare("INSERT INTO datospersonales (cc, nombre, apellido, edad)
            VALUES ('".$cc."', '".$nombre."', '".$apellido."','".$edad."')"); 

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