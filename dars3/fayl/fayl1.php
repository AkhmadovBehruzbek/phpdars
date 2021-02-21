<?php
    $file = "malumot.txt";
    // fayl mavjudligini tekshirish
    if (file_exists($file)) {
        // faylni o'qish uchun ochish
        $handle = fopen($file, "r") or die("ERROR: Faylni ochib bo'lmadi");
        // Fayldan belgilangan baytli malumotni o'qish
        $content = fread($handle, "20");
        // fayl dastagini yopish
        fclose($handle);
        // fayl contentini ekranga chiqarish
        echo $content;
    } else {
        echo "ERROR: File mavjud emas";
    }
?>