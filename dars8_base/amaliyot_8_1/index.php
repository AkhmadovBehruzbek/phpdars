<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amaliyot 1</title>
</head>
<body>
    <h1>Amaliyot 8_1</h1>
    <p>'sayt' nomli baza yaratamiz, 'menu' nomli jadval va jadval 'id, menu_nomi, izoh, vaqt' nomli qatorlardan iborat bo'ladi. 
    bazani sahifaga bog'lang va sahifadan ma'lumot kiritib bazani to'ldirish imkoniyatiga egab bolish lo</p>

    <form action="" method="GET">
        <label for="menu_name">Menyu nomini kiriting:</label>
        <input type="text" name="menu_name" id="menu_name"><br>
        <label for="comment">Izoh qoldiring:</label>
        <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
        <button type="submit" name="submit">Yuborish</button>
    </form>

    <?php
        if (isset($_GET['submit'])) {
            $m_name = $_GET['menu_name'];
            $comment = $_GET['comment'];
            if (($m_name="") || ($comment="")) {
                echo "Kiritilmadi";
            } else {
                $conn = mysqli_connect("localhost", "root", "", "sayt") or die("Error: Ulanishda xatolik yuzberdi.");
                $sql = "INSERT INTO menu(menu_name, comment, data_time  ) VALUES ('{$m_name}', '{$comment}', NOW())";
                $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                if ($result) {
                    echo "Ma'lumot kiritildi";
                } else {
                    echo "Xatolik yuz berdi";
                }
            }
            
        }
    ?>
</body>
</html>