<?php
    $file = "malumot.txt";

    if (file_exists($file)) {
        $handle = fopen($file, "r") or die("ERROR: Faylni ochib bo'lmadi.");
        $content = fread($handle, filesize($file));

        fclose($handle);
        echo $content;
    } else {
        echo "Faylni ochib bo'lmadi.";
    }
?>
