<?php

include("./connectdb.php");
if (isset($_POST['upload'])) {
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMG = $_FILES['img'];
    $img_location = $_FILES['img']["tmp_name"];
    $img_name = $_FILES['img']["name"];
    $img_up = "uploading/" . $img_name;
//    $insert = "INSERT INTO product (name , price , img) VALUES ('$NAME','$PRICE','$img_up')";
    $insert = "INSERT INTO product (name ,price ,img) VALUES ('$NAME','$PRICE','$img_up')";
    mysqli_query($connect, $insert);
    if (move_uploaded_file($img_location, "uploading/" . $img_name)) {
        echo "<script>alert('success upload product') </script>";
    } else {
        echo "<script>alert('failed upload product') </script>";
    }
    header("Location:index.php");
}