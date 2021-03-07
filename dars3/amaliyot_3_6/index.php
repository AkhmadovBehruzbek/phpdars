<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4 - amaliyot</title>
</head>
<body>
    <h2>3_6 amaliy ish</h2>
    <p>sotib olingan tovarlar narxini va nomini chek qilib ekranga chiqaruvchi dastur tuzish</p>

    <form>
        <input type="number" name="soni" placeholder="Nechta tovar sotib olasiz?"><br>
        <input type="submit" value="Kiritish" name="submit"> <br><br>
    </form>

    <?php
        if (isset($_GET['submit'])) {
            $s = $_GET['soni']; 
    ?>
    <!-- maxsulot sonini kiritish uchun forma -->
    <form>
        <?php
            for ($i=0; $i<$s; $i++) {
                echo "<input type='text' name='nom{$i}' placeholder='{$i} - tovar nomi:'>";
                echo "<input type='number' name='son{$i}' placeholder='{$i} - tovar soni: '>";
                echo "<input type='number' name='narx{$i}' placeholder='{$i} - tovar narxi: '><hr>";   
            }
        ?>
        <!-- button -->
        <input type="hidden" name="s" value="<?=$s;?>">
        <input type="submit" name="s2" value="Chekni olish">
    </form>

    <!-- Chek chiqarish -->
    <?php }
        if (isset($_GET['s2'])) {
            $s = $_GET["s"];
            $summa = 0;
            echo "<h1>Olindi: </h1><ol>";
            for ($p=0; $p<$s; $p++) {
                $summa = $summa + $_GET["son".$p] * $_GET["narx".$p];
                $j = $_GET["son".$p] * $_GET["narx".$p];
                echo "<li>". $_GET['nom'.$p] . " -- " . $_GET['narx'.$p] . " * " . $_GET['son'.$p] . " = " .$j ."</li>"; 
            }
             echo "</ol>Jami: ". $summa;
        }
    ?>
    
</body>
</html>