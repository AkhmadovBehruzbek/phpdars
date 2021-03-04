<?php session_start(); 
if ($_SESSION['til'] =="")
    $_SESSION['til'] = "uz";
if (isset($_GET['til'])) {
    $_SESSION['til'] = $_GET['til'];
}
include('lang/'.$_SESSION['til'].".php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bosh sahifa</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .active {
            color:red;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?=$data["nom"];?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <ul>
                    <li>
                        <a href="#"><?=$data['bosh'];?></a>
                    </li>
                    <li>
                        <a href="#"><?=$data['contact'];?></a>
                    </li>
                    <li>
                        <a href="#"><?=$data['yang'];?></a>
                    </li>
                    <li>
                        <a href="#"><?=$data['aloqa'];?></a>
                    </li>
                    <li>
                        <a href="?til=uz" <?php
                            if ($_SESSION['til']=="uz") {
                                echo " class='active'";
                            } ?>
                        >uz</a>
                    </li>
                    <li>
                        <a href="?til=ru" <?php
                            if ($_SESSION['til']=="ru") {
                                echo " class='active'";
                            } ?>
                        >ru</a>
                    </li>
                </ul>
            </div>
            <div class="col-8">
                <?=$data['biz'];?>
                <h2><?=$data['addres'];?></h2>
            </div>
        </div>
    </div>
</body>
</html>