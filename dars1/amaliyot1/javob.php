<?php

$birinchi = $_GET['birinchi'];
$ikkinchi = $_GET['ikkinchi'];
$natija = $birinchi * $ikkinchi;
$index = 'index.php';

echo "<h1> {$birinchi} * {$ikkinchi} = {$natija} </h1><br>";

echo "<h2><a href='{$index}'>Orqaga qaytish</a></h2>"

?>