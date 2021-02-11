<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>switch case</title>
</head>
<body>
    <h2>switch case operatorlari</h2>
    <p>valyuta concertatsiya qilish dasturini switch case orqali tuzamiz.</p>

    <form action="" method="GET">
        <input type="text" name="son" placeholder="Qiymat kiriting: "><br>
        <input type="radio" name="radio" value="som"> Somdan Dollorga o'tish <br>
        <input type="radio" name="radio" value="dollor"> Dollordan Somga o'tish <br>
        <input type="radio" name="radio" value="euro"> Somdan Euroga o'tish <br>
        <input type="submit" value="Ayriboshlash" name="submit"><br>
    </form>

    <?php
        $son = $_GET['son'];
        $tip = $_GET['radio'];
        $index = 'index.php';

        if (isset($_GET['submit']) && is_numeric($_GET['son'])) {
            if ($son > 0) {
                switch ($tip) {
                    case 'som':
                        $n = $son / 8300;
                        break;
                    case 'dollor':
                        $n = $son * 8300;
                        break;
                    case 'euro':
                        $n = $son / 8900;
                        break;
                    default:
                        echo "Tanlanmadi";
                        break;
                }
            }
        }

        echo "Natija: " . number_format($n,0,""," ");
    ?>
</body>
</html>