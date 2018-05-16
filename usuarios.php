
    <?php include 'layout.php' ?>
    <div>
        <form action="/action_page.php" method='post' id='forminsert'>
            <div class="container">
                <h3>Datos</h3>
                CC: (0-9)<input type="text" placeholder="cc" name="cc" id='cc' autofocus required> 
                Nombre: <input type="text" placeholder="nombre" name="nombre"  required>
                Apellido: <input type="text" placeholder="apellido" name="apellido" required>
                Edad: (0-9)<input type="text" placeholder="edad" name="edad" id='edad' required>
                <button type="submit" class="btn">Insertar Datos</button>
            </div>
        </form>
    </div>
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
    $stmt = $conn->prepare("SELECT * FROM datospersonales"); 
    // execute the query
    $stmt->execute();

    if ($stmt->rowCount()) {
        echo "<table class='tabl'>";
        echo "<tr>
                <th>CC</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>EDAD</th>
                <th>UPDATE</th>
                <th>DELETE</th>
            </tr>"; 
        // set the resulting array
        $result = $stmt->fetchAll(); 
             // output data of each row
         foreach ($result as $key) {
             echo "<tr>
                        <td>".$key["cc"]."</td>
                        <td>".$key["nombre"]."</td>
                        <td>".$key["apellido"]."</td>
                        <td>".$key["edad"]."</td>
                        <td><a href='action_up.php?id=".$key["id"]."' method='get'>update</button></td>
                        <td><a href='action_del.php?id=".$key["id"]."' method='get' >delete</a></td>
                        </tr>";
         }
         echo "</table>";
     } else {
         echo "0 results";
     }
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    ?>
    <script>
    miFormulario = document.querySelector('#forminsert');
    miFormulario.cc.addEventListener('keypress', function (e){
	if (!soloNumeros(event)){
  	e.preventDefault();
    }
})
miFormulario.edad.addEventListener('keypress', function (e){
	if (!soloNumeros(event)){
  	e.preventDefault();
    }
})
//Solo permite introducir numeros.
function soloNumeros(e){
    var key = e.charCode;
    return key >= 48 && key <= 57;
}
    </script>
    </body>
</html>