<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="sayt">
        <div class="header">
        
        </div>
        <div class="log">
            <?php 
                if ($_SESSION['user']== "") {
                    echo "<h2>Login oynasi</h2>"; ?>
                    <form action="">
                        <input type="text" name="log"><br>
                        <input type="password" name="pass">
                        <input type="submit" name="s1" value="OK">
                    </form>
                <?php 
                    if (isset($_GET['s1'])) {
                        if (($_GET['log'] == "user") && ($_GET['pass'] == "123")) {
                            $_SESSION['user'] = $_GET['log']; ?>
                            <script type="text/javascript">
                                window.location.href="index.php";
                            </script>
                        <?php } else {
                            echo "<h3>Login yoki parol xato</h3>";
                        }
                    }
                    
                } else {
                    echo "<h3>Salom " .$_SESSION['user']."</h3>";
                    echo "<a href='exit.php'>Chiqish</a>";
                }
            ?>
            
        </div>
        <div class="content">
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt ad distinctio ipsum at perferendis nesciunt 
                autem suscipit magnam, eum illo est ratione eveniet maiores, nulla, esse assumenda aspernatur ipsa incidunt?
            </p>
        </div>
    </div>
</body>
</html>