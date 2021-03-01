<?php 
session_start(); 
if ($_SESSION['user'] == "") {
    header("Location: index.php");
} else { 
?>
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
    <p>5+1=?</p>
    <form>
        <input type="number" name="javob">
        <input type="submit" name="s1" value="Kiritish">
    </form>

    <?php
        if (isset($_GET['s1'])) {
            if ($_GET['javob'] == 6) {
                echo "<h1>Tabriklaymiz siz g'olibsiz.</h1>";
                echo "<a href='exit.php'>chiqish</a>";
            } else {
                echo "Javob xato.";
            }
        }
    ?>
</body>
</html>

<?php } ?>