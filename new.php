<?php

$conn = new mysqli("localhost","root","","",);
$result = $conn -> query("SHOW DATABASES");
echo $result -> fetch_object() -> Database;
?>