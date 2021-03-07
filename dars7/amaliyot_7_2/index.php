<?php // https://templatemo.com/tm-319-stable-business
    session_start(); 
    if ($_SESSION['til'] =="")
        $_SESSION['til'] = "uz";
    if (isset($_GET['til'])) {
        $_SESSION['til'] = $_GET['til'];
    }
    include('lang/'.$_SESSION['til'].".php");
    include("head.php");
    include("title.php");
    include("menu.php");
    include("slider.php");
    include("malumot.php");
    include("footer.php");

?>

    





