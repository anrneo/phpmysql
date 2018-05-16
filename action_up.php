<?php include 'layout.php' ?>

<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "usuarios";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare statement
    $stmt = $conn->prepare("SELECT * FROM datospersonales WHERE id='".$_GET['id']."'"); 
    // execute the query
    $stmt->execute();

    if ($stmt->rowCount()) {
        // set the resulting array
        $result = $stmt->fetchAll(); 
             // output data of each row
         foreach ($result as $key) {
            echo '<div>
            <form action="/action_update.php?id='.$_GET['id'].'" method="post">
                <div class="container">
                    <h3>Actualizar Datos</h3>
                    <input type="hidden" name="id"  value="'.$key["id"].'">
                    Cedula: <input type="text" name="cc"  value="'.$key["cc"].'" >
                    Nombre: <input type="text" name="nombre" value="'.$key["nombre"].'">
                    Apellido: <input type="text" name="apellido" value="'.$key["apellido"].'" >
                    Edad: <input type="text" name="edad" value="'.$key["edad"].'" >
                    <button type="submit" class="btn">Actualizar</button>
                </div>
            </form>
        </div>'; 
             }
     } 
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;

?>
</body>
</html>