<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3- amaliyot</title>
</head>
<body>
    <h2>3_3 - amaliy ish</h2>
    <p>Registratsiya formasiga rasm va bio ma'lumotlarini kiritishimiz kerak bo'ladi va rasm images papkasiga bio files papkasiga saqlanishi kerak boladi.</p>

    <form action="upload-manager.php" method="POST" enctype="multipart/form-data">
        <h1>Registratsiya</h1>
        <label for="">
            Rasmingizni kiriting: 
            <input type="file" name="photo"><br>
        </label>
        <label for="">
            Malumotlaringizni doc yoki docx formatida kiriting: 
            <input type="file" name="file"><br>
        </label>

        <input type="submit" value="Log in" name="submit">
    </form>
</body>
</html>