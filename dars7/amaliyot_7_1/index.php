<?php session_start(); 
if ($_SESSION['til']=="") 
    $_SESSION['til']="uz";
if (isset($_GET['til'])) {
    $_SESSION['til'] = $_GET['til'];
}
$d = date("Y/m/d");
include("langs/".$_SESSION['til'].".php");
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
    <h1><?= $data['bugun']; echo " ".$d;?></h1>
    <ul>
        <li><a href="?til=uz">uz</a></li>
        <li><a href="?til=ru">ru</a></li>
        <li><a href="?til=eng">eng</a></li>
    </ul>
</body>
</html>