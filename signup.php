<?php


    $usuario=htmlspecialchars($_POST['usuario']);
    $email=htmlspecialchars($_POST['email']);
    $pass1=htmlspecialchars($_POST['pass1']);
    $pass2=htmlspecialchars($_POST['pass2']);
    

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "usuarios";

    try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare statement
    $stmt1 = $conn->prepare("SELECT * FROM login where email='".$email."'"); 
    $stmt1->execute();
    if ($stmt1->rowCount()){
        $conn = null;
        echo 'usuario ya registrado <br><br>';
        echo '<a href="index.php">inicio</a>';
        }
    $stmt = $conn->prepare("INSERT INTO login (usuario, email, pass) VALUES ('".$usuario."', '".$email."', '".$pass1."')"); 
    $stmt->execute();
    
        if ($stmt->rowCount()) {
            echo 'usuario registrado con exito<br><br>';
            echo '<a href="index.php">inicio</a>';

        }


    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;


    
    ?>