<?php
    if (isset($_POST['submit'])) {
        if (($_FILES['photo']['type'] == "image/jpeg") && $_FILES['file']['type']== "application/msword" ){
            move_uploaded_file($_FILES['file']['tmp_name'], "files/".$_FILES['file']['name']);
            move_uploaded_file($_FILES['image']['tmp_name'], "images/".$_FILES['image']['name']);
            
        }  else {
            echo "fayl tipi boshqa";
        }
    }
?>