<?php
    $son = $_GET['miqdor'];
    $tip = $_GET['radio'];
    $index = 'index.php';

    if (isset($_GET['submit'])) {
        if ($tip == "s") {
            $n = $son * 8300;
            echo number_format($n,0,""," ") . " so'm";
        }
        else {
            $n = $son / 8300;
            echo number_format($n,2,".", " ") . " $";
        }
    }

?>