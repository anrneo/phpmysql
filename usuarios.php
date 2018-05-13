<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
    
    </style>
</head>
<body>
    <div>
        <form action="/action_page.php" method='post'>
            <div class="container">
                <h3>Datos</h3>
                <label for="email"><b>cc</b></label>
                <input type="text" placeholder="cc" name="cc"  value="<?php echo $cc;?>" required>
                <label for="name"><b>nombre</b></label>
                <input type="text" placeholder="nombre" name="nombre" value="<?php echo $name;?>" required>
                <label for="lastname"><b>apellido</b></label>
                <input type="text" placeholder="apellido" name="apellido" value="<?php echo $apellido;?>" required>
                <label for="age"><b>edad</b></label>
                <input type="text" placeholder="edad" name="edad" value="<?php echo $edad;?>" required>
                <button type="submit" class="btn">Login</button>
            </div>
        </form>
    </div>
    <?php

    include 'conndb.php';

     $sql = "SELECT * FROM datospersonales";

     $result = $conn->query($sql);

     if ($result->num_rows > 0) {
        echo "<table class='tabl'>";
        echo "<tr>
                <th>CC</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>EDAD</th>
                <th>UPDATE</th>
                <th>DELETE</th>
            </tr>"; 
             // output data of each row
         while($row = $result->fetch_assoc()) {
             echo "<tr>
                        <td>".$row["cc"]."</td>
                        <td>".$row["nombre"]."</td>
                        <td>".$row["apellido"]."</td>
                        <td>".$row["edad"]."</td>
                        <td><a href='action_up.php?id=".$row["id"]."' method='get'>update</button></td>
                        <td><a href='action_del.php?id=".$row["id"]."' method='get' >delete</a></td>
                        </tr>";
         }
         echo "</table>";
     } else {
         echo "0 results";
     }
     $conn->close();
?>

    </body>
</html>