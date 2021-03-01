<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bosh sahiga</title>
</head>
<body>
    <?php
        $a = rand(0,10);
        $b = rand(0,10);
        $c =$a + $b;
        echo "<h2>";
        echo $a."+".$b."=?</h2>"; 
    ?>
    <form action="">
        <input type="number" name="j1">
        <input type="submit" value="OK" name="s1">
        <input type="hidden" name="javob" value="<?= $c; ?>">
    </form>

    <?php
        if (isset($_GET['s1'])) {
            if ($_GET['j1'] == $_GET['javob']) {
                $_SESSION['j1']="1"; ?>

                <script>
                    window.location.href="index2.php";
                </script>

            <?php } else {
                echo "Javob xato:";
            }
        }
    ?>

</body>
</html>