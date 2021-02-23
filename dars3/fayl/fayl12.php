<?php
    // faylni bir joydan boshqa joyga ko'chirish copy() funksiyasi orqali amalga oshiriladi
    // Fayl manbasi manzili
    $file = "eslatma.txt";
    // Mo'ljal
    $newfile = "testdir/eslatma.txt";

    // mavjudligini tekshirish
    if (file_exists($file)) {
        // nusxalandi
        if (copy($file, $newfile)) {
            echo "Ajoyib nusxalandi";
        } else {
            echo "nusxalab bo'lmadi";
        }
    }else {
        echo "fayl mavjud emas";
    }
?>