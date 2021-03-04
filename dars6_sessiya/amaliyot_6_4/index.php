<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bosh sahifa</title>
    <style>
* {
margin: 0;
padding: 0;
box-sizing: border-box;
}
header {
    width: 100%;
    height: 13vh;
    line-height: 100px;
    background-color: orange;
    text-align: center;
    color: rgb(22, 71, 230);
    font-size: 25px;
    margin-top: 15px;
}

nav {
    width: 20%;
    height: 75vh;
    background-color: rgba(255, 225, 173, 0.945);
    float: left;
    border-right: 5px solid rgba(66, 64, 64, 0.712);
    border-top: 10px solid rgb(158, 158, 158);
    
}

nav ul {
    list-style-type: none;
    margin:50px 50px;

}

nav ul li {
    font-size: 25px;
    margin: 15px;
}

nav ul li a {
    color: rgb(18, 57, 131);
}

section {
    width: 100%;
    height: 75vh;
    background-color: rgb(238, 235, 235);
    text-align: center;
}

section h2 {
    padding: 20px;
    font-size: 30px;
}

section p {
    width: 800px;
    margin-left: 900px;
    font-size: 20px;
}

section img {
    float: left;
    width: 200px;
    margin-left: 100px;
}

footer {
    width: 100%;
    background-color: rgba(0, 21, 78, 0.849);
    height: 10vh;
    color: #fff;
    text-align: center;
    line-height: 10vh;
}
    </style>
</head>
<body>
<?php

    if ($_SESSION['admin'] == "") {
        header("Location: login.php");
    } else {  echo '
    <!-- header -->
    <header>
        <h1>Sayt nomi</h1>
    </header>
    <!-- nav -->
    <nav>
        <ul>
            <li>
                <a href="./index.php">Bosh sahifa</a>
            </li>
            <li>
                <a href="./add.php">Kiritish</a>
            </li>
            <li>
                <a href="./del.php">O\'chirish</a>
            </li>
            <li>
                <a href="./exit.php">Chiqish</a>
            </li>
        </ul>
    </nav>
    <!-- section -->
    <section>
        <img src="https://www.pngkit.com/png/full/363-3638504_get-free-quotation-hire-php-developer-png.png" alt="Developer-photo">
        <h2>Sarlavha</h2>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Molestias aut incidunt minus? In expedita eius obcaecati consequatur recusandae cupiditate tempore et atque, laborum quis repellat laboriosam vero! Provident, porro odio!
        </p>
    </section>
    <!-- footer -->
    <footer>
        <p>Copy Right &copy 2021 by Behruzbek Akhmadov</p>
    </footer>
'; } ?>
</body>
</html>