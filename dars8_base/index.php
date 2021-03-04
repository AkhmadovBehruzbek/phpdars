<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="text" name="soz"><br>  
        <input type="text" name="avtor"> <br>

        <input type="date" name="vaqt">
        <input type="submit" name="s1" value="Kiritish">
    </form>
    <?php
    if (isset($_GET['s1'])) {
        $soz = $_GET['soz'];
        $muallif = $_GET['avtor'];
        $vaqt = $_GET['vaqt'];
        $con = mysqli_connect("localhost", "root", "", "web9") or die("Xatolik: Ulanmadi");
        $sql = "INSERT INTO sozlar(soz,muallif,vaqt) values ('{$soz}', '{$muallif}', '{$vaqt}')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "Kiritildi";
        } else {
            echo mysqli_error($result);
        }
    }
    ?>
</body>
</html>