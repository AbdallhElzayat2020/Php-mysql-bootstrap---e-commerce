<?php

include "connectdb.php";

if (isset($_POST['add'])) {
  $name = $_POST["name"];
  $price = $_POST["price"];
  $insert="INSERT INTO cart (name,price) VALUES ('$name' , '$price')";
  mysqli_query($connect , $insert);
  header("location:cart.php");
}