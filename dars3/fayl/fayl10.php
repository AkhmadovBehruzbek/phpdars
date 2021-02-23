<?php
    // fayl yoki direktoriyani unlink() funksiyasi orqali o'chirish mumkin
    $file = "udalit.txt";
    // fayl mavjudligini tekshirish
    if (file_exists($file)) {
        // faylni o'chirishga urinish
        if (unlink($file)) {
            echo "fayl o'chirildi";
        } else {
            echo "faylni o'chirib bo'lmadi";
        }
    } else {
        echo "fayl mavjud emas";
    }

?>