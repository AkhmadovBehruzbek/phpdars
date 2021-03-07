<?php
    session_start();

    if ($_SESSION['user'] == "") {
        header("Location: form.php");
    } else { ?>
        <h2>Admin oynasi</h2>
        <a href="exit.php">Chiqish</a>
    <?php } ?>

