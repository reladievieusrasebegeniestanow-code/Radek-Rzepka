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
<div>
    <form method="POST">
    <button name="i" type="submit" ></button>



<select name="x">

<?php

$a = $_POST["nazwa"];

$conn = mysqli_connect("localhost", "root","");

$result = mysqli_query($conn,"SHOW DATABASES");

while ($row = mysqli_fetch_array($result)){
    echo "<option>".$row[0]."</option>";
}
?>
</select> 
</form>
</div>
</body>
</html>
<?php 


if(isset($_POST["i"])){ 
mysqli_select_db($conn,$_POST["x"]);
    
    $result = mysqli_query($conn,"SHOW TABLES");
    
    while ($row = mysqli_fetch_array($result)){
        echo "<option>".$row[0]."</option>";
}}
?>