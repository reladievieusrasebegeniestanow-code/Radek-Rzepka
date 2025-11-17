<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = mysqli_connect('localhost','root','');
        $i=0
    ?>
    <form method="POST">
    <select>
        <option name="db">
        <?php
        while($i=0){
        mysqli_query( $conn ," SHOW DATABASES "); 
        }
        ?>
        </option>
    </select>

    </form>
    <?php
    
    ?>
</body>
</html>