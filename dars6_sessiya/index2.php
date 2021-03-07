<?php
    session_start();
    //echo $_SESSION['user'];
    if ($_SESSION['user'] != "") {
        echo "salom new site";
    } else {
        header("Location: index.php");
    }
?>