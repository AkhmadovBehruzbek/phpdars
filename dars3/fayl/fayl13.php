<?php
    // katalog ichidagi barcha fayllarni rekursiv sifatida chiqaruvchi funksiya
    function outputFiles($path) {
        if (file_exists($path) && is_dir($path)) {
            $result = scandir($path);
            // Hozirgi va ota katalogni filterlayapmiz
            $files = array_diff($result, array('.', '..'));

            if (count($files) > 0) {
                // Qaytgan massivni siktllayapmiz
                foreach($files as $file) {
                    if (is_file($path/$file)) {
                        // Fayl nomini ko'rsatyapmiz
                        echo $file . "<br>";
                    } else if(is_dir("$path/$file")){
                        // agar katalog mavjud bo'lsa rekursiv chiqaryapmiz
                        outputFiles("$path/$file");
                    }
                }
            } else {
                echo "ERROR: katalogda fayl topilmadi.";
            }
        } else {
            echo "ERROR: katalog mavjud emas.";
        }
    }  

    outputFiles("temp");
?>