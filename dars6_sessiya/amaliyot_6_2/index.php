<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bosh sahifa</title>
</head>
<body>
    <h2>Savol1</h2>
    <p>12-8=?</p>
    <form>
        <input type="number" name="javob">
        <input type="submit" name="s1" value="Kiritish">
    </form>

    <?php
        if (isset($_GET['s1'])) {
            if ($_GET['javob'] == 4) {
                $_SESSION['user'] = "admin"; ?>
                <script>
                    window.location.href="s2.php";
                </script>
            <?php } else {
                echo "Javob xato.";
            }
        }
    ?>
</body>
</html>