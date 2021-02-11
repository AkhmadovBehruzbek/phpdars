<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1- amaliyot</title>
</head>
<body>
    <h2>Mavzu: shart operatorlari. 1- amaliy ish</h2>
    <p>kiritilgan qiymatni dollordan so'mga so'mdan dollorga aylantiradigan dastur.</p>
    <br>

    <form method="GET">
        <input type="number" name="miqdor" placeholder="Pul miqdorini kiriting: "><br>
        <input type="radio" name="radio" value="s">
        Dollordan So'mga<br>
        <input type="radio" name="radio" value="d">
        So'mdan Dollorga<br>
        <input type="submit" name="submit" value="Ayriboshlash"><br>

    </form>

    <?php
    $son = $_GET['miqdor'];
    $tip = $_GET['radio'];
    $index = 'index.php';

    if (isset($_GET['submit'])) {
        if ($tip == "s") {
            $n = $son * 8300;
            echo number_format($n,0,""," ") . " so'm";
        }
        else {
            $n = $son / 8300;
            echo number_format($n,2,".", " ") . " $";
        }
    }

?>

</body>
</html>