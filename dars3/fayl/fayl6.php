<?php
    $file = "eslatma.txt";
    // Kiritilishi kerak bo'lgan text ni o'zgaruvchiga kiritamiz
    $data = "Bugun web dasturlash bo'yicha dats bo'lib o'tadi.";
    // Faylga yozish uchun ochamiz
    $handle = fopen($file, "w") or die ("Faylni  ochib bo'lmadi.");
    // Faylga ma'lumotni joylaymiz
    fwrite($handle, $data) or die ("Faylga malumot yozib bo'lmadi.");
    // fayl dastagini yoping
    fclose($handle);

    echo "Malumot muvaffaqiyatli kiritildi.";

/* Ushbu usulda agar eslatma.txt fayli mavjud bo'lmasa php bu faylni yaratib ichiga malumot 
yozadi agar mavjud bo'lsa eslatma.txt faylidagi malumotni o'chirib 
o'rniga kiritilgan malumotni yozadi. */


?>