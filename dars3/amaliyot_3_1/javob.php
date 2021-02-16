<?php
if (isset($_POST['submit'])) {
    // o'zgaruvchilar
    $f_type = $_FILES['img_file']['type'];
    $f_tmp = $_FILES['img_file']['tmp_name'];
    $f_dir = 'uploads';
    $f_name = $_FILES['img_file']['name'];
    $f_size = $_FILES['img_file']['size']/1024;

    //shart
    if ($f_size < 6000) {
        if ($f_type == "image/jpeg" || $f_type == "image/JPEG" || $f_type == "image/png" || $f_type == "image/PNG" || $f_type == "image/gif" || $f_type == "image/GIF") 
        { 
            $upload = move_uploaded_file($f_tmp, "$f_dir/$f_name");

            if ($upload) {
                echo "<h1>Rasm saqlandi</h1><br>";
                echo "<img src='$f_dir/$f_name' width='400px'><br>";
                echo "<h1><a href='index.php'> Bosh sahifa </a></h1>";
            } else {
                echo "false";
            }
        } else {
            echo "<h1>Siz rasm yuklamadingiz.</h1>";
        }
    } else {
        echo "<h1>6 mb dan kichik bo'lgan fayl tanlang.</h1>";
        echo "<h1><a href='index.php'> Bosh sahifa </a></h1>";
    }
}

?>