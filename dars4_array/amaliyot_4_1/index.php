<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1- amaliyot</title>
</head>
<body>
    <h2>4_1 - amaliy ish</h2>
    <p>Bir vaqtning o'zida ikkita joyda bir xil textni ekranga chiqarish.</p>

    <!-- php code -->
    <?php
    // 1-usul
        $text = ['hello', 'world', 'lorem', 'salom', 'good'];
        $a = rand(0,3);
    ?>
            <table width="600px" align="center" border="1">
                <tr>
                    <td colspan="3">Sayt nomi 1- usul</td>
                </tr>
                <tr>
                    <td><h1><?=$text[$a]?></h1></td>
                    <td>Content</td>
                    <td><h1><?=$text[$a];?></h1></td>
                </tr>
            </table>

    <?php
    // 2-usul
        $text = ['hello', 'world', 'lorem', 'salom', 'good'];
        shuffle($text);
    ?>
            <table width="600px" align="center" border="1">
                <tr>
                    <td colspan="3">Sayt nomi 2- usul</td>
                </tr>
                <tr>
                    <td><h1><?=$text[0]?></h1></td>
                    <td>Content</td>
                    <td><h1><?=$text[0];?></h1></td>
                </tr>
            </table>
            
</body>
</html>