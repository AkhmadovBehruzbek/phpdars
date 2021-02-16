<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 - amaliyot</title>
</head>
<body>
    <h2>3 - amaliy ish</h2>
    <p>Sahifaga rasm yuklash kerak bo'ladi. Rasm upload papkasiga saqlanadi va rasm nomini foydalanuvchi elon qiladi.</p>

    <form action="javob.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="img_file"><br>
        <input type="text" name="img_name" placeholder="Rasm nomini kiriting:"><br>
        <input type="submit" value="Yuborish" name="submit"> <br>
    </form>
</body>
</html>