<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login php</title>
    <style>
    /* Add styles to the form container */
.container {
    position: relative;
    left: 500px;
    margin: 5px;
    max-width: 300px;
    padding: 5px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for the submit button */
.btn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}
    </style>
</head>
<body>
<div>
        <form action="/action_login.php" method='post'>
            <div class="container">
                <h3>logueate </h3>
                <label for="email"><b>email</b></label>
                <input type="text" placeholder="email" name="email"  value="<?php echo $email;?>" required></input>
                <label for="name"><b>password</b></label>
                <input type="password" placeholder="password" name="pass" value="<?php echo $pass;?>" required>
                <button type="submit" class="btn">Login</button>
            </div>
        </form>
    </div>

</body>
</html>