<?php

    echo $_FILES['f']['name'] . '<br>';
    echo $_FILES['f']['type'] . '<br>';
    echo $_FILES['f']['tmp_name'] . '<br>';
    echo $_FILES['f']['error'] . '<br>';
    $b = $_FILES['f']['size'];
    echo $b / 1024 . " kb";

    
    move_uploaded_file($_FILES["f"]["tmp_name"],"uploads/" . $_FILES["f"]["name"]);

?>