<?php 
session_start();
if ($_SESSION['j1']==1) {
    $a = rand(10,20);
    $b = rand(10,20);
    $c =$a + $b;
    echo "<h2>";
    echo $a."+".$b."=?</h2>"; 
?>
    <form action="">
        <input type="number" name="j2">
        <input type="submit" value="OK" name="s2">
        <input type="hidden" name="javob" value="<?= $c; ?>">
    </form>
<?php 
    if(isset($_GET['s2'])) {
        if ($_GET['j2'] == $_GET['javob']) {
            $_SESSION['j2']=2; ?>
            <script type="text/javascript">
                window.location.href="index3.php";
            </script>
        <?php } else {
            echo "Javob xato:";
        }
    }
} else {
    header("Location: index.php");
} ?>