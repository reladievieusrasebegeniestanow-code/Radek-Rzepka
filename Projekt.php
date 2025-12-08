<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <header><header>
        
    <form action="" method = "Post">

    <input name="login" type="text">
    <input name="password" type="text">

    <button name="register" type="submit" >register</button>
    <button name="zaloguj" type="submit" >liogiscsz</button>

    </form>

    <footer></footer>


    <?php
    $login = $_POST['login'];
    $haslo = $_POST['password'];
    $conn = mysqli_connect("localhost","root","","projestjs");

    if(isset($_POST['register'])) {
        $q1 = "SELECT login FROM uzytkownicy WHERE login='$login'";
        $result = mysqli_query($conn, $q1);

        if(mysqli_num_rows($result) == 0) {
            $q = "INSERT INTO uzytkownicy (login, haslo) VALUES ('$login','$haslo')";
        
            if(mysqli_query($conn, $q)); {
                echo "Rejestracja zakończona sukcesem";

    }}}
    

 if(isset($_POST['zaloguj'])) {
            $q = "SELECT * FROM uzytkownicy WHERE login='$login' AND haslo='$haslo'";
            $result = mysqli_query($conn, $q);

            if(mysqli_num_rows($result) > 0) {
            
                header("Location: welcome.php");
                exit();
            } else {
                echo "Niepoprawne dane logowania";
            }
        }
    
    
    
    ?>
</body>
</html>