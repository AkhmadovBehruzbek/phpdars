<a href="?p=1&&m=admin">Sahifa1</a>
<a href="?p=2&&m=user">Sahifa2</a>

<?php
    if (isset($_GET['p'])) {
        if ($_GET['p'] == 1) {
            include("s.php");
        } 
        if ($_GET['p'] ==2) {
            include('s2.php');
        }
        echo "<h2>Muallif:" .$_GET['m']."</h2>";
     }
?>