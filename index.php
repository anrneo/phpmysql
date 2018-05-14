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
    max-width: 400px;
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
    </style>
</head>
<body>
        <form action="/action_login.php" method='post'>
            <div class="container">
                <h3>logueate </h3>
                Email: <input type="text" placeholder="email" name="email"  value="<?php echo $email;?>" required></input>
                Password: <input type="password" placeholder="password" name="pass" value="<?php echo $pass;?>" required>
                <button type="submit" class="btn">Login</button>
            </div>
        </form>

</body>
</html>