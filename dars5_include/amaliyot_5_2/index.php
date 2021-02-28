<?php
    $model = array (
        array("nomi"=>"Model1", "rasmi"=>"1.jpg", "narxi"=>"100$"),
        array("nomi"=>"Model2", "rasmi"=>"2.jpg", "narxi"=>"200$"),
        array("nomi"=>"Model3", "rasmi"=>"3.jpg", "narxi"=>"120$"),
        array("nomi"=>"Model4", "rasmi"=>"4.jpg", "narxi"=>"300$"),
        array("nomi"=>"Model5", "rasmi"=>"5.jpg", "narxi"=>"330$"),
        array("nomi"=>"Model6", "rasmi"=>"6.jpg", "narxi"=>"180$"),
        array("nomi"=>"Model7", "rasmi"=>"7.jpg", "narxi"=>"260$"),
        array("nomi"=>"Model8", "rasmi"=>"8.jpg", "narxi"=>"290$")
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bosh sahifa</title>
    <style>
        table {
            width:50%;
            margin:0 auto;
            text-align:center;
        }
        th, td {
            border:1px solid black;
        }

        #left {
            width:40%;  
        }
        #img {
            width:100px;
            float:left;
            margin-left:10px;       
        }

    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th id="left">Telefon modeli</th>
                <th>Batafsil</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php
                        foreach ($model as $m) {
                            echo "<a href='?{$m['nomi']}'>{$m['nomi']}</a><br>";
                        }
                    ?>
                </td>
                <td rowspan="8">
                    <?php
                        foreach ($model as $m) {
                            if (isset($_GET[$m['nomi']])) {
                                echo "<img id='img' src='images/{$m['rasmi']}'>";
                                echo "<h3>{$m['nomi']}</h3>";
                                echo "<p>{$m['narxi']}</p>";
                            }
                        }
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>