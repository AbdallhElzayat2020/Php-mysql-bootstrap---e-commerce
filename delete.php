<?php
include ("./connectdb.php");
$ID = $_GET["id"];
mysqli_query($connect, "DELETE FROM product WHERE id=$ID");
header("location:products.php");

