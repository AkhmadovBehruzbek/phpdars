<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4 - amaliyot</title>
</head>
<body>
    <h2>3_4 - amaliy ish</h2>
    <p> (.jpg) formatida kiritilgan rasmlarni images papkasiga va (.doc, .docx) formatida kiritilgan fayllarni files papkasiga saqlovchi dastur tuzilsin. </p><br>

    <form action="" enctype="multipart/data-type" method="POST">
        <label for="">
            Fayl kiriting:
            <input type="file" name="files"><br>
        </label>
        
        <label for="">
            Rasm kiriting:
            <input type="file" name="images"><br>
        </label>
                
        <input type="submit" value="Yuborish" name="s1"><br>        
    </form> 

    <?php
        if (isset($_POST['s1'])) {
            $file = $_FILES['files']['name'];
            $image = $_FILES['images']['name'];
            if ($_FILES['files']['type'] == "application/msword") {
                $file_dir = "files/".$file;
                move_uploaded_file($_FILES['files']['tmp_name'], $file_dir);
            } 

            if ($_FILES['images']['type'] == "image/jpg") {
                $image_dir = "images/".$image;
                move_uploaded_file($_FILES['images']['tmp_name'], $image_dir);
            }
        }

        
    ?>
</body>
</html>