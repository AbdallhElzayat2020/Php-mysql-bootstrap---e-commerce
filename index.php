<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>onLine Shop</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
<center>
    <div class="main">
        <form action="insert.php" method="post"  enctype="multipart/form-data">
            <h2>E-commerce_Website</h2>
            <img src="image/logo.png" width="450px" alt="logo_img">
            <input type="text" name="name">
            <br>
            <input type="text" name="price">
            <br>
            <input type="file" id="file" name="img" style="display:none">
            <label for="file">اختيار صورة المنتج</label>
            <button name="upload" type="submit"> رفع المنتج</button>
        </form>
        <br><br>
        <a href="products.php">كل المنتجات</a>
    </div>
    <p>Developed By Abdallh Elzayat</p>
</center>

</body>
</html>