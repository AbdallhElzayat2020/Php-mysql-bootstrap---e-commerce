<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Card Items | السلة </title>
    <link rel="stylesheet" href="./css/index.css">
    <style>
        /*.table-bordered>tbody>tr>td,*/
        .table-bordered>thead>tr>th
        {
            background-color: #1f87cf!important;
            color: #fff !important;
        }
    </style>
</head>

<body>
<div class="container text-center mt-5">
    <h3 class="product text-center ">المنتجات المحجوزة</h3>

    <table class='table table-bordered table-hover table-striped mt-5'>
        <thead>
        <tr>
            <th scope='col'>Product Name</th>
            <th scope='col'>Product Price</th>
            <th scope='col'>Delete Product</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require "connectdb.php";
        $result = mysqli_query($connect, "SELECT * FROM cart");
        while ($row = mysqli_fetch_array($result)) {
            echo "
                    <tr>
                        <td>$row[name]</td>
                        <td>$row[price]</td>
                        <td><a href='del_card.php? id=$row[id]' class='btn btn-danger'>Delete</a></td>
                    </tr>
                    ";
        }
        ?>
        </tbody>
    </table>
    <a href="shop.php" class="text-primary">الرجوع للمنتجات</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
