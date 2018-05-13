<?php
    $cc=$_POST['cc'];
    $name=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $edad=$_POST['edad'];

    include 'conndb.php';

    $sql = "INSERT INTO datospersonales (cc, nombre, apellido, edad)
            VALUES ('".$cc."', '".$name."', '".$apellido."','".$edad."')";

    if ($conn->query($sql) === TRUE) {
        header('Location: usuarios.php');   
     } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    
    ?>