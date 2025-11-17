<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $conn = new mysqli("localhost","root","","firma");
    $result = $conn -> query("SHOW TABLES");
    $q = $conn -> prepare("SELECT * FROM pracownicy");

while($row = $result->fetch_row()){
    echo $row[0] ;
}



    
    ?>
</body>
</html>