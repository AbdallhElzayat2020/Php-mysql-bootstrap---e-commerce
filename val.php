<?php
include "connectdb.php";
$id = $_GET['id'];
$up = mysqli_query($connect,"SELECT * FROM  product WHERE id=$id");
$data = mysqli_fetch_array($up);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>تاكيد الشراء| Conform Payment </title>
  <style>
  input {
    display: none;
  }

  .main {
    width: 30%;
    padding: 20px;
    box-shadow: 1px 1px 10px selver;
    margin-top: 50px;
    border-radius: 8px;
  }
  </style>
  <link rel="stylesheet" href="./css/index.css">
</head>

<body>
  <center>
    <div class="main">
      <form action="insert_cart.php" method="post">
        <h2>هل فعلا تريد شراء المنتج</h2>
        <input type="text" value="<?= $data['id']; ?>" name="id">
        <input type="text" value="<?= $data['name']; ?>" name="name">
        <input type="text" value="<?= $data['price']; ?>" name="price">
        <button name="add" type="submit" class="btn btn-success">تاكيد الاضافة </button>
        <br>
        <a href="shop.php">الرجوع لصفحة المنتجات</a>
      </form>
    </div>
  </center>
</body>

</html>