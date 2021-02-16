<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2- amaliy ish</title>
</head>
<body>
    <h2>2 - amaliyot</h2>
    <p>FISH, email, tel, manzil, rasm shu kabi ma'lumotlar kiritiladigan forma yarating va kiritilgan ma'lumotlarni ekranga chiqaring.</p>
    <br>

    <form action="javob.php" method="POST">
        <input type="text" name="f_name" placeholder="Ismingizni kiriting:"><br>
        <input type="text" name="l_name" placeholder="Familiyangizni kiriting:"><br>
        <input type="email" name="email" placeholder="Emailingizni kiriting:"><br>
        <input type="number" name="number" placeholder="Telefon raqam kiriting:"><br>
        <input type="text" name="manzil" placeholder="Manzilingizni kiriting:"><br>
        <input type="text" name="rasm" placeholder="Rasmingizni kiriting"><br>
        <input type="submit" value="Yuborish" name="submit">
    </form>

</body>
</html>