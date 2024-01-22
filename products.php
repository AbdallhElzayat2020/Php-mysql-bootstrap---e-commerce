<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Products | المنتجات</title>
  <link rel="stylesheet" href="./css/index.css">
</head>

<body>
  <div class="container">
    <h3 class="product text-center ">كل المنتجات</h3>
    <div class="row">
      <?php
        include("./connectdb.php");
        $products = mysqli_query($connect, "SELECT * FROM product");
        while ($item = mysqli_fetch_array($products)) {
            echo "
            <div class='col-lg-3 d-flex justify-content-center align-items-center col-md-6 col-sm-12'>
                <div class='card' style='width: 15rem;'>
                    <img src='$item[img]' class='card-img-top' alt='product-Img'>
                    <div class='card-body'>
                        <h5 class='card-title'>$item[name]</h5>
                        <p class='card-text'>$item[price]</p>
                        <div class='buttons'>
                            <a href='delete.php? id=$item[id]' class='btn btn-danger'>حذف المنتج</a>
                            <a href ='edit.php? id=$item[id]' class='btn btn-primary'>تعديل المنتج</a>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</body>

</html>