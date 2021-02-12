<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 - amaliyot</title>
</head>
<body>
    <h2>3 - amaliy ish. 4 amal (/*-+) bajara oladigan kalkulator yaratish.</h2>

    <form action="" method="GET">
        <input type="number" name="bir" placeholder="birinchi sonni kiriting:" value="<?php if(isset($_GET['bir'])) {echo $_GET['bir'];} ?>">
        <select name="amal" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="ikki" placeholder="ikkinchi sonni kiriting:" value="<?php if(isset($_GET['ikki'])) {echo $_GET['ikki'];} ?>">
        <input type="submit" name="submit" value="=">
    </form>

    <?php
        if (isset($_GET['submit'])) {

            $amal = $_GET['amal'];
            $bir = $_GET['bir'];
            $ikki = $_GET['ikki'];

            switch ($amal) {
                case '*':
                    $n = $bir * $ikki;
                break;
                case '/':
                    $n = $bir / $ikki;
                break;
                case '+':
                    $n = $bir + $ikki;
                break;
                case '-':
                    $n = $bir - $ikki;
                break;
                default:
                    echo "Amal tanlanmadi";
                break;
            }

            echo "{$bir} * {$ikki} = ". $n;
        }
    ?>
</body>
</html>