<?php
    $rasm = ['1.jpg', '2.png', '3.jpeg', '4.png'];
    shuffle($rasm); //rasmlarni o'rnini almashtirib yuboradi
    for ($i=0; $i<4; $i++) {
        echo "<img src='images/{$rasm[$i]}' width='200px'>";
    }
?>