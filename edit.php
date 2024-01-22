<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EditProduct | تعديل منتج</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
<?php
include ("connectdb.php");
$ID=$_GET['id'];
$update=mysqli_query($connect,"SELECT * FROM product WHERE id=$ID");
$data=mysqli_fetch_array($update);
?>
<center>
    <div class="main">
        <form action="update.php" method="post"  enctype="multipart/form-data">
            <h2>تعديل المنتجات</h2>
            <input type="text" name="id" value="<?php echo $data['id'] ?>">
            <br>
            <input type="text" name="name" value="<?php echo $data['name'] ?>">
            <br>
            <input type="number" name="price" value="<?php echo $data['price'] ?>">
            <br>
            <input type="file" id="file" name="img" style="display:none">
            <label for="file">تحديث صورة المنتج</label>
            <button name="update" type="submit">تعديل المنتج</button>
        </form>
        <br><br>
        <a href="products.php">كل المنتجات</a>
    </div>
    <p>Developed By Abdallh Elzayat</p>
</center>

</body>
</html>