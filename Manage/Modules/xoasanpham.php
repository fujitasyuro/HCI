<?php
require_once('../../DB/connect.php');
require_once('../../DB/DBHelper.php');
?>

<?php
if (isset($_POST['xoasanpham'])) {
     $sql_insert_product = mysqli_query($connect, "DELETE FROM products WHERE product_id = '$_GET[id]'");

     header('Location:../quanlysanpham.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Xóa SP</title>
     <link rel="stylesheet" href="../css/app.css">
</head>

<body>
     <main>
          <div class="maindelete">
               <h1>
                    Bạn có chắc là muốn xóa sản phẩm này
               </h1>
               <form method="POST">
                    <?php
                    $sql_productEdit = "SELECT products.*, sub_brand.sub_brand_name, producer.producer_name, laptop_type.laptop_type_name FROM products JOIN producer JOIN sub_brand JOIN laptop_type ON products.producer_id = producer.producer_id AND products.sub_brand_id = sub_brand.sub_brand_id AND products.type_id = laptop_type.laptop_type_id AND products.product_id = '$_GET[id]'";

                    $row_productEdit = executeResult($sql_productEdit);

                    foreach ($row_productEdit as $productEdit) {
                         echo '
                              <div class="img-delete">
                                        <img src="../../uploads/' . $productEdit['thumbnail'] . '">
                              </div>

                              <div class="namedelete">
                                        <span>' . $productEdit['name'] . '</span>
                              </div>

                              <div class="btndelete">
                                        <input type="submit" name="xoasanpham" class="btn" value="Xóa">
                                        <a href="../quanlysanpham.php" class="btn">Hủy</a>
                              </div>';
                    }
                    ?>
               </form>
          </div>

     </main>
</body>

</html>