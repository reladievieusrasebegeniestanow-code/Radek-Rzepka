<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name = "a1">                                         
        <input type="text" name = "n">
        <input type="text" name = "r">
        <input type="text" name = "ile">
        <button name = "btn">wyślij</button>

    </form>
    <?php
    if(isset($_POST['btn'])){
        $ile = $_POST['ile'];
    }

      if(isset($_POST['btn'])){
        $a1 = $_POST['a1'];
    }

    if(isset($_POST['btn'])){
        $n = $_POST['n'];
    }

    if(isset($_POST['btn'])){
        $r = $_POST['r'];
    }
    for($i=0;$i!=$ile;$i++){
        $conn = mysqli_connect('localhost','root','','matemax');
        $q = "INSERT INTO ciągi_arytmetyczne(a1,n,r) VALUES ($a1,$n,$r)";
        $a = mysqli_query($conn,$q);
    }

  
    
    ?>
</body>
</html>