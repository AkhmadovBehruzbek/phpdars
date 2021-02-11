<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4 - amaliyot</title>
</head>
<body>
    <h2>4 - amaliy ish </h2>
    <h3>Registratsiya formasini yarating</h3>
 
        <form action="" method="POST">
            <input type="text" name="fname" placeholder="Ismingizni kiriting:"><br>
            <input type="text" name="lname" placeholder="Familiyangizni kiriting;"><br>
            <input type="radio" name="radio" value="Ayol">Ayol<br>
            <input type="radio" name="radio" value="Erkak">Erkak<br>
            <input type="number" name="age" placeholder="yoshingizni kiriting:"><br>
            <input type="submit" value="kiritish" name="submit">
        </form>
    <?php  
    
         
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $gender = $_POST['radio'];
            $age = $_POST['age'];
             
            // age
            if ($age >= 16) {
                $n1 = "Balog'atga yetgan";
            } elseif ($age < 16 && $age > 0) {
                $n1 = "Yosh bola";
            } elseif ($age == "") {
                $n1 = "Kiritilmadi";
            }

            // f name
            if ($fname == "") {
                $n2 = "Kiritilmadi.";
            } else {
                $n2 = $fname;
            }

            // l name
            if ($lname == "") {
                $n3 = "Kiritilmadi.";
            } else {
                $n3 = $lname;
            }

            // gender
            if ($gender == "") {
                $n4 = "Kiritilmadi.";
            } else {
                $n4 = $gender;
            }

            echo "Ismingiz: {$n2}<br>";
            echo "Familiyangiz: {$n3}<br>";
            echo "Yoshingiz: {$age} ({$n1})<br>";
            echo "Jinasingiz: {$n4}<br>";
    ?>

    


</body>
</html>