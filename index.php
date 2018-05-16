<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login php codesApp</title>

    <style>
    /* Add styles to the form container */
.container {
    margin: auto;
    max-width: 300px;
    padding: 15px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    font-size: 100%;
    width: 100%;
    padding: 18px;
    margin: 15px 0 32px 0;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for the submit button */
.btn {
    font-size: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 18px;
    border: none;
    cursor: pointer;
    width: 110%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}
#registro {
    font-family:Verdana, Helvetica, sans-serif;
    color: blue;
    margin-top: 15px;
    text-align: right;
    }
    .mySlides{
        width: 70%;
        margin: auto
    }
     </style>
</head>
<body>
        <form action="action_login.php" method="post" id='form1'>
            <div class="container">
                <h3>Logueate</h3>
                Email: <input type="text" placeholder="email" name="email" required></input>
                Password: <input type="password" placeholder="password" name="pass" required></input>
                <button type="submit" class="btn">Login</button>
                <div id="registro">
                <a href="#" class="registro">No estoy registrado</a>
                </div>
            </div>
        </form>
        <form action="signup.php" method="post" id="form2" style='display:none'>
             <div class="container">
                 <h3>Ingresa los datos de regisitro</h3>
                 Usuario: <input type="text"  value="1" name="usuario" id="usu" required></input>
                 Email: <span id='emaok' style="display:none">(email incorrecto)</span>
                        <input type="text" placeholder="email" name="email" value="anreno@gmail.com" id="ema" required></input>
                 Password:<span style="display:none" id="pas"> (los password no coinciden)</span>
                         <input type="password" placeholder="password" name="pass1" value="1" id="pass1"required></input>
                 Confirma el password: <input type="password" placeholder="confrma el password" value="1" name="pass2" id="pass2" required></input>
                        <button type="submit" class="btn">Registrar</button>
                 <div id="registro">
                    <a href="index.php" class="registro">Login</a>
                 </div>
             </div>
             </form>\
<!-- Slide Show -->
<section>
  <img class="mySlides" src="./space/1.jpg">
  <img class="mySlides" src="./space/2.jpg">
  <img class="mySlides" src="./space/3.jpg">
  <img class="mySlides" src="./space/4.jpeg">
  <img class="mySlides" src="./space/5.jpg">
  <img class="mySlides" src="./space/6.jpg">
  <img class="mySlides" src="./space/7.jpg">
  <img class="mySlides" src="./space/8.jpg">
</section>
<script src="./js/jquery.js"></script>
    <script src="./js/src.js"></script>

    <script>
    
    // Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000);
}
    
    </script>

</body>
</html>