<?php

include 'conndb.php';


$id = intval($_GET['id']);

// sql to delete a record
$sql = "DELETE FROM datospersonales WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
    header('Location: usuarios.php');   
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>