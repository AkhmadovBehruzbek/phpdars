<?php
    // file_get_contents
    $file = "malumot.txt";

    if (file_exists($file)) {
        $content = file_get_contents($file);
        echo $content;
    } else {
        echo "ERROR: Faylni ochib bo'lmadi.";
    }
?>