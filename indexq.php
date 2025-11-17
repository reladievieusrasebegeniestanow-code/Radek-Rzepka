<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <button type="submit">dodaj baze</button>
    </form>
    <form method="POST">
        <input type="number" name="columns" min="1"/>
        <button type="submit" name="table_add_btn" > dodaj tabele</button>
    </form>
</body>
</html>

<?php
    if(isset($_POST["table_add_btn"])){
        $col = $_POST["columns"];
    }
    echo "<form method='post'>
        <label>nazwa tabeli </lable>
        <input type='text'name='tab_name'/> <br></br> ";
    for($i=1; $i<=$col;$i++){
        include("add_columns.php");
    }
?>