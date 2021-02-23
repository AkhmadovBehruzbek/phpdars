<?php
    // fayl yoki direktoriya nomini rename() funksiyasi orqali o'zgartirish mumkin
    $file = "yangifayl.txt";
    // fayl borligini tekshiramiz
    if(file_exists($file)) {
        // fayl nomini o'zgartirishga urinish
        if (rename($file, "eslatma.txt")) {
            echo "Fayl qayta nomlandi.";
        } else {
            echo "ERROR: Faylni qayta nomlab bo'lmadi";
        }
    } else {
        echo "ERROR: Fayl mavjud emas";
    }
?>