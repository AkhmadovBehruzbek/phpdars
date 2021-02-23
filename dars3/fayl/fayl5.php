<?php
    // file funksiyasi
    $file = "malumot.txt";

    if (file_exists($file)) {
        $arr = file($file) or die("ERROR: Faylni ochib bo'lmadi.");
        foreach ($arr as $line) {
            echo $line;
        }
    } else {
        echo "ERROR: Faylni ochib bo'lmadi.";
    }
?>