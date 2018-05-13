<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    

<?php

include 'conndb.php';


$id = intval($_GET['id']);

// sql to delete a record
$sql = "SELECT * FROM datospersonales WHERE id='".$id."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 // output data of each row
 while($row = $result->fetch_assoc()) {

echo '<div>
    <form action="/action_update.php" method="get">
        <div class="container">
            <h3>Actualizar Datos</h3>
            <label for="id"><b>id</b></label>
            <input type="text" name="id"  value="'.$row["id"].'" readonly>
            <label for="cc"><b>cc</b></label>
            <input type="text" name="cc"  value="'.$row["cc"].'" >
            <label for="name"><b>nombre</b></label>
            <input type="text" name="nombre" value="'.$row["nombre"].'">
            <label for="lastname"><b>apellido</b></label>
            <input type="text" name="apellido" value="'.$row["apellido"].'" >
            <label for="age"><b>edad</b></label>
            <input type="text" name="edad" value="'.$row["edad"].'" >
            <button type="submit" class="btn">Actualizar</button>
        </div>
    </form>
</div>'; 
                 }
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>
</body>
</html>