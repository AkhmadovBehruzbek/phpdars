<?php
    session_start();
    if (isset($_POST['s1'])) {
        if (($_POST['log'] == "admin") && ($_POST['pass']=="123")){
            $_SESSION['admin'] = $_POST['log']; ?>
                <script type="text/javascript">
                    window.location.href="index.php";
                </script>
        <?php } else {
            echo "Login yoki parol xato";
        }
    }
?>