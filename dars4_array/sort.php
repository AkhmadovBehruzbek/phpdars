<?php
    $rasm = ['2.png', '4.png', '1.jpg', '3.jpeg'];
    //sort($rasm); //tartiblaydi [0-9,a-z,A-Z]
    rsort($rasm); //teskari tartib 
    for ($i=0; $i<4; $i++) {
        echo "<img src='images/{$rasm[$i]}' width='200px'>";
    }
?>