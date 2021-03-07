<?php
    // file_put_contents funksiyasi ham fayl mavjud bo'lsa php uni standart qayta yozadi
    // Agar siz fayl kontentlarini saqlab qolishni istasangiz
    // FILE_APPEND flegini uchunchi parametr sifatida 
    // file_put_content funksiyasiga uzatishingiz kerak bo'ladi.
    $file = "eslatma.txt";
    // Yozish kerak bo'lgan text
    $data = "Web dasturchi albatta js ni bilishi kerak.";
    // faylga ma'lumot joylang
    file_put_contents($file, $data, FILE_APPEND) or die("ERROR: Faylga ma'lumot yozib bo'lmadi.");
    echo "Ma'lumot faylga muvaffaqiyatli yozildi";

?>