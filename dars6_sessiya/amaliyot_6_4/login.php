<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login bo'limi</title>
    <!-- style -->
    <style>
    .header {
        text-align:center;
        background-color: rgb(231, 229, 229);
        width: 30%;
        margin: 30vh auto;
        padding: 30px 0 60px 0;
        border-radius: 5px;
    }

    .header input {
        margin-top: 5px;
    }

    .header button {
        margin-top: 10px;
        width: 110px;
            font-size: 18px;
    }
    </style>
</head>
<body>
<div class="header">
    <h1>Log in</h1>
    <form action="config.php" method="POST">
        <!-- username -->
        <label for="username">Username:</label>
        <input type="text" name="log" id="username"><br>
        <!-- password -->
        <label for="password">Password:</label>
        <input type="password" name="pass" id="password"><br>
        <button name="s1" type="submit">Log in</button>
    </form>
</div>
</body>
</html>