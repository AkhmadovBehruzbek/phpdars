<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amaliyot</title>
</head>
<body>
    <h2>3_2 amaliy ish</h2>
    <p>Rasm yuklanganda forma orqali ism kiritladi va rasm serverga kiritilgan ism nomi bilan saqlanadi va ekranga chiqariladi.
    </p>
    
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="ism" placeholder="Ismingizni kiriting:"><br>
        <input type="file" name="file"><br>
        <input type="submit" value="yuborish" name="submit"><br>
    </form>

    <?php
        if (isset($_POST['submit'])) {
            $ism = $_POST['ism'];
            if ($_FILES['file']['type'] == "image/jpeg") {
                $y = "uploads/".$ism.".jpg";
                move_uploaded_file ($_FILES['file']['tmp_name'], $y);
            } else {
                echo "Fayl tipi boshqa";
            }
        }
    ?>

</body>
</html>