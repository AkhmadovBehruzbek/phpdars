<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 - amaliyot</title>
</head>
<body>
    <h2>2 - amaliy ish</h2>
    <p>login va parol formalarini yaratamiz va logi parol kiritilganda agar to'g'ri bo'lsa "Yangi sahifa" aks holda "Login yoki Prol xato" deb chiqaradigan dastur tuzilsin.</p>

    

    <?php
    
        if (!isset($_POST['submit'])) { ?>

            <form action="" method="POST">
                <input type="text" name="login" value="<?php if(isset($_POST['login'])){echo $_POST['login'];}?>" placeholder="Login kiriting:"><br>
                <input type="password" name="parol"  placeholder="Parol kiriting:"><br>
                <input type="submit" value="Kirish" name="submit"><br>
            </form>
            
            <?php } 
            
            else {
            $login = $_POST['login'];
            $parol = $_POST['parol'];

            if ($login == "user" && $parol == "123456") {
                echo ("Yangi sahifa");
            } else {
                echo ("Login yoki Parol xato");
            }
        } 
    ?>
</body>
</html>