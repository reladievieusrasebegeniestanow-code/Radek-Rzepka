<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST">

    <input type="text" name="bd">
    <input type="text" name="tb">
    <button type="submit" name="btn"></button>

    </form>

</body>
</html>
<?php

$conn = mysqli_connect("localhost","root","");
$q = "SHOW DATABASES";
$db_names = mysqli_query($conn,$q);
echo "<ol>";
while($row = mysqli_fetch_row($db_names))
{
    $q1 = "SHOW TABLES FROM ".$row[0];
    $conn1 = mysqli_connect("localhost","root");
    $table_names = mysqli_query($conn1,$q1);
    echo "<li>".$row[0]."</li><ul>";
    while($row1 = mysqli_fetch_row($table_names))
    {
        echo "<li>".$row1[0]."</li>";
    }
    echo "</ul>";
}
echo"</ol>";
if(isset("btn")){
    $db = $_POST["db"];
    $tb = $_POST["tb"];
    $conn2 = mysqli_connect("localhoast","root","","$db");
    $q2 = "SHOW COLUMNS FORM $db.$table";
    
}
?>
