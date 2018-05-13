<?php
    $cc=$_GET['cc'];
    $name=$_GET['nombre'];
    $apellido=$_GET['apellido'];
    $edad=$_GET['edad'];
    $id =$_GET['id'];

    include 'conndb.php';

    $sql = "UPDATE datospersonales SET cc='".$cc."', nombre='".$name."', apellido='".$apellido."', edad='".$edad."' WHERE id='".$id."'";

    if ($conn->query($sql) === TRUE) { 
        header('Location: usuarios.php');   
     } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    
    ?>