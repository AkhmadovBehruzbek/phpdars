<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="">
        <input type="text" name="login">
        <input type="password" name="password">
        <input type="submit" name="s1" value="OK">
    </form>

    <?php
        if (isset($_GET['s1'])) {
            if (($_GET['login'] == "admin") && ($_GET['password'] == "admin")) {
                $_SESSION['user'] = "admin";
                ?>
                <script>
                    window.location.href="admin.php";
                </script>
            <?php } else{
                echo "Login yoki parol xato";
            }
        }
    ?>
</body>
</html>