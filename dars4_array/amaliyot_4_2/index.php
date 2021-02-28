<?php
    $yangilik = array (
        array("nomi"=>"yangilik1", "rasmi"=>"1.jpg", "content"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis veritatis omnis rem labore quam corporis architecto eaque saepe laboriosam, aperiam maxime voluptates ea, laudantium dolores ducimus?"),
        array("nomi"=>"yangilik2", "rasmi"=>"2.jpg", "content"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis veritatis omnis rem labore quam corporis architecto eaque saepe laboriosam, aperiam maxime voluptates ea, laudantium dolores ducimus?"),
        array("nomi"=>"yangilik3", "rasmi"=>"3.jpg", "content"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis veritatis omnis rem labore quam corporis architecto eaque saepe laboriosam, aperiam maxime voluptates ea, laudantium dolores ducimus?")
    );

    $reklama = ["1.jpg", "2.jpg", "3.jpg"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bosh sahifa</title>
    <style>
        * {
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        #table {
            width:60%;
            margin:0 auto;
            margin-top:30px;
            border-collapse:collapse;
        }
        th, td {
            border:1px solid black;
        }
        #sayt-nomi {
            padding:20px 10px;
            font-size:50px;
        }
        #left {
            width:30%;
        }
        #right {
            width:70%;
        }
        #ul {
            height:200px;
            list-style:none;
            text-align:center;
            padding-top:20px;
        }
        #ul li {
            font-size:30px;
        }
        #div {
            height:200px;
            padding:0 20px;
        }
        #img {
            width:100px;
            float:left;
        }
        #rek {
            width:200px;
            margin-left:70px;
            margin-top:20px;
        }
        h3 {
            text-align:center;
        }
        #height {
            height:50vh;
        }    
    </style>
</head>
<body>
    <table id="table">
        <thead>
            <tr>
                <th id="sayt-nomi" colspan="2">Sayt nomi</th>
            </tr>
        </thead>
        <tbody>
            <tr id="height">
                <!-- left stast -->
                <td id="left">
                    <!-- left-top start -->        
                    <ul id="ul">
                        <li>yangilik 1</li>
                        <li>yangilik 2</li>
                        <li>yangilik 3</li>
                    </ul>
                    <hr>
                    <!-- left-bottom start -->
                        <h3>Reklama</h3>
                        <img id="rek" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="">
                </td>
                <!-- right start -->
                <td id="right">
                    <div id="div">
                        <img id="img" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="rasm">
                        <h1>Sarlavha1</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis veritatis omnis rem labore quam corporis architecto eaque saepe laboriosam, aperiam maxime voluptates ea, laudantium dolores ducimus? Reprehenderit perferendis sit tempora!
                        </p>
                        <br>
                        <img id="img" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="rasm">
                        <h1>Sarlavha1</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis veritatis omnis rem labore quam corporis architecto eaque saepe laboriosam, aperiam maxime voluptates ea, laudantium dolores ducimus? Reprehenderit perferendis sit tempora!
                        </p>
                        <br>
                        <img id="img" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="rasm">
                        <h1>Sarlavha1</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis veritatis omnis rem labore quam corporis architecto eaque saepe laboriosam, aperiam maxime voluptates ea, laudantium dolores ducimus? Reprehenderit perferendis sit tempora!
                        </p>
                        <br>
                    </div>
                    
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>