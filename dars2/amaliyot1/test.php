<?php
    $son = $_POST['miqdor'];
    $tip = $_POST['radio'];
    $index = 'index.php';

    if ($tip == "s") {
        $n = $son * 8300;
        echo number_format($n,0,""," ") . " so'm";
    }
    else {
        $n = $son / 8300;
        echo number_format($n,2,".", " ") . " $";
    }

?>