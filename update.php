<?php
//include("connectdb.php");
//if (isset($_POST['upload'])) {
//    $NAME = $_POST['name'];
//    $PRICE = $_POST['price'];
//    $PRICE = $_FILES['image'];
//    $image_location = $_FILES['image']["temp_name"];
//    $image_name = $_FILES['image']["name"];
//    $image_up = "image/" . $image_name;
//    $insert = "INSERT INTO product (name, price, image) VALUES ('$NAME', '$PRICE','$image_up')";
//    mysqli_query($connect,$insert);
//    if (move_uploaded_file($image_location,"image/".$image_name)){
//        echo "<script>alert(success upload product) </script>";
//    }else{
//        echo "<script>alert(failed upload product) </script>";
//    }
//}
//

include("./connectdb.php");
if (isset($_POST['update'])) {
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMG = $_FILES['img'];
    $img_location = $_FILES['img']["tmp_name"];
    $img_name = $_FILES['img']["name"];
    $img_up = "uploading/" . $img_name;
    $ID=$_POST['id'];
//    $insert = "INSERT INTO product (name , price , img) VALUES ('$NAME','$PRICE','$img_up')";
    $update= "UPDATE product SET name = '$NAME' , price = '$PRICE', img = '$img_up' WHERE id=$ID";
    mysqli_query($connect, $update);
    if (move_uploaded_file($img_location, "uploading/" . $img_name)) {
        echo "<script>alert('success update product') </script>";
    } else {
        echo "<script>alert('failed update product') </script>";
    }
    header("Location:products.php");
}
