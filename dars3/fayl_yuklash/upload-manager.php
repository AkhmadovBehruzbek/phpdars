<?php
    // fayl yuborilganmi?
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // fayl xatolarsiz yuklandimi
        if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
            $allowed = ['jpg' => 'image/jpg', 'jpeg' => 'image/jpeg', 'gif' => 'image/gif', 'png' => 'image/png'];

            $fileName = $_FILES['photo']['name'];
            $fileType = $_FILES['photo']['type'];
            $fileSize = $_FILES['photo']['size'];

            // fayl kengaytmasi tasdiqlandimi
            $ext = pathinfo($fileName, PATHINFO_EXTENSION);

            if (!array_key_exists($ext, $allowed)) die("ERROR: Iltimos mavjud fayl formatida yuklang");

            // fayl hajmi tasdiqlandimi? (5mb max)
            $maxSize = 5 * 1024 * 1024;
            if ($fileSize > $maxSize) die("ERROR: Tuxsat etilgan hajmdan oshib ketti");
            // faylning MIME turi tekshirildimi?
            if (in_array($fileType, $allowed)) {
                // Uni yuklashdan oldin mavjudligi tekshirildimi?
                if (file_exists("upload/". $fileName)) {
                    echo $fileName . "fayl mavjud";
                } else {
                    move_uploaded_file($_FILES['photo']['tmp_name'], "upload/" . $fileName);
                    echo "Fayl yuklandi";
                }
            } else {
                echo "ERROR: Faylni yuklashda xatolik. Qayta urinib ko'ring";
            }
        } else {
            echo "ERROR: " . $_FILES['photo']['error'];
        }
    }
?>