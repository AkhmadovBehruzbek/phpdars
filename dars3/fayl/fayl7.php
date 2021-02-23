<?php
    // file_put_content funcsiyasi bu file_get_content funksiyasiga
    // o'xshash bo'lib faylni ochmasdan unga ma'lumot yozadi.
    
    $file = "eslatma.txt";
    // yozish kerak bo'lgan satr
    $data = "Bugun web dasturlash bo'yicha dars bo'ladi.";
    // faylga malumotlarni joylang
    file_put_contents($file, $data) or die("ERROR: Faylga ma'lumot yozib bo'lmadi");

    echo "Ma'lumot faylga muvaffaqiyatli saqlandi";
?>