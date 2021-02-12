<?php

    $son = $_GET['son'];
    $narx = $_GET['narx'];
    $index = 'index.php';

    $summ = $son * $narx;

    echo "Maxsulot narxi: {$summ} so'm<br>";

    if ($summ >= 50000 && $son >= 2) {
        $ch = $summ * 0.1;
        $t = $summ - $ch;

        echo "Siz uchun chegirma 10%: {$ch}<br>";

        echo "To'lash kerak: {$t}<br>";
    } elseif ($summ >= 30000) {
        $ch = $summ * 0.05;
        $t = $summ - $ch;

        echo "Siz uchun chegirma 5%: " .$ch. '<br>';
        echo "To'lash kerak: " .$t. '<br>';
    }
     else {
        echo "Chegirma mavjud emas <br>";
        
    }

    echo "<a href='{$index}'>Orqaga qaytish</a>";

?>