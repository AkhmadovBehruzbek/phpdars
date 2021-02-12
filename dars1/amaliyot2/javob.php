<?php

$fname = $_POST['f_name'];
$lname = $_POST['l_name'];
$email = $_POST['email'];
$number = $_POST['number'];
$manzil = $_POST['manzil'];
$rasm = $_POST['rasm'];
$index = 'index.php';

echo "<img src='images/{$rasm}.jpg' width='300px'><br>";
echo "Ismingiz: {$fname}<br>";
echo "Familiyangiz: {$lname}<br>";
echo "email: {$email}<br>";
echo "tel: {$number}<br>";
echo "Manzil: {$manzil}<br>";
echo "<a href='{$index}'>Orqaga qaytish</a>"

?>

