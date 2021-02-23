<?php
    $file = "malumot.txt";
    if (file_exists($file)) {
        readfile($file) or die("ERROR: Faylni o'qib bo'lmadi");
    } else {
        echo "ERROR: Fayl mavjud emas";
    }
?>