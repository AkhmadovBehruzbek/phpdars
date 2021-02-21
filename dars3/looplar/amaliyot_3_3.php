<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>amaliyot 3</title>
</head>
<body>
    <h2>3_3 - amaliy ish</h2>
    <p>Sahifaga inputlar soni kiritiladi va OK tugmasi bosilganda o'shancha input ekranga chiqariladi. Keyin inputlarga son kiritilib OK tugmasi bosilganda sonlar yig'indisini hisoblaydigan dastur tuzing.</p>

    <form method="GET">
        <input type="text" placeholder="Butun son kiriting" name="son">
        <input type="submit" value="Ok" name="s1"><br>
    </form>

    <?php
    if (isset($_GET['s1'])) {
            $son = $_GET['son'];
        ?>

        <form>
            <?php
                for ($i=1; $i<=$son; $i++) {
                    echo "<input type='number' name='t{$i}' placeholder='{$i} - sonni kiriting:'><br>";
                }
        ?>
        <input type="hidden" name="sn" value="<?= $i; ?>">
        <input type="submit" name='s2' value='ok2'><br>
    </form>
    <?php
    }
    if (isset($_GET['s2'])) {
        $s = 0;
        for ($i=1; $i < $_GET['sn']; $i++) {
            @$s = @$s + @$_GET["t{$i}"];
        }
        echo "Jami: {$s}";
    }
    ?>
       
</body>
</html>