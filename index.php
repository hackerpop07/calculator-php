<?php
?>
<!doctype html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="display_discount.php" method="post">
    <input type="text" name="ProductDescription" placeholder="Mô tả của sản phẩm">
    <br>
    <input type="text" name="ListPrice" placeholder="Giá niêm yết của sản phẩm">
    <br>
    <input type="text" name="DiscountPercent" placeholder="Tỷ lệ chiết khấu (phần trăm)">
    <br>
    <input type="submit" value="Tính chiết khấu">
</form>
</body>
</html>
