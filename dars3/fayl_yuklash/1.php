<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fayl yuklash formasi</title>
</head>
<body>
    <form action="upload-manager.php" method="POST" enctype="multipart/form-data">
        <h2>Faylni yuklash</h2>
        <label for="fileSelect">Fayl nomi:</label>
        <input type="file" name="photo" id="fileSelect">
        <input type="submit" name="submit" value="Upload">
        <p><strong>Eslatma: </strong> Faqatgina .jpg, .jpeg, .gif, .png formatlar qo'llaniladi, Hajmi 5 mb dan oshmasin.</p>
    </form>
</body>
</html>