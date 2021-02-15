<?php

    echo $_FILES['f']['name'] . '<br>';
    echo $_FILES['f']['type'] . '<br>';
    echo $_FILES['f']['tmp_name'] . '<br>';
    echo $_FILES['f']['error'] . '<br>';
    $b = $_FILES['f']['size'] / 1024;
    echo $b . " kb <br>";
    echo rand(0, 2500) ."<br>";

    
?>

<img src="'uploads/'<?php echo $_FILES['f']['name']; ?>" alt="rasm">
<?php
if ($b >= 2000) {
    echo "katta fayl";
} else {
    move_uploaded_file($_FILES["f"]["tmp_name"],"uploads/" . $_FILES["f"]["name"]);
}
?>