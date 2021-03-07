<?php
    session_start();
    if ($_SESSION['j2']!="")  {
        echo "Siz barcha savolga to'g'ri javob berdingiz";
    } else {
        header("Location: index2.php");
    }
?>