<?php
require_once('../DB/connect.php');
?>
<?php
if (isset($_POST['themsanpham'])) {
     $laptop_name = $_POST['tensanpham'];
     $hinhanh = $_FILES['anhlaptop']['name'];
     $hinhanh_tmp = $_FILES['anhlaptop']['tmp_name'];
     $mpn = $_POST['mpn'];
     $sku = $_POST['sku'];
     $nsx = $_POST['nsx'];
     $sub_brand = $_POST['sub'];
     $type_laptop = $_POST['typelaptop'];
     $cpu = $_POST['cpu'];
     $display = $_POST['display'];
     $display_color = $_POST['dis-color'];
     $ram = $_POST['ram'];
     $gpu = $_POST['gpu'];
     $disk = $_POST['disk'];
     $pin = $_POST['pin'];
     $connector = $_POST['connector'];
     $weight = $_POST['weight'];
     $os = $_POST['os'];
     $color = $_POST['color'];
     $insurance = $_POST['baohanh'];
     $promotion = $_POST['khuyenmai'];
     $decs = $_POST['decs'];
     $soluong = $_POST['the-number'];
     $price = $_POST['price'];
     $sale = $_POST['sale'];

     $path = '../uploads/';
     $sql_insert_product = mysqli_query($connect, "INSERT INTO products(name, thumbnail, mpn, sku, producer_id, cpu, display, color_coverage, ram, gpu, disk, pin, connector, weight, os, color, price, sale, soluong, decs, promotion, insurance, type_id, sub_brand_id) values ('$laptop_name', '$hinhanh', '$mpn', '$sku', '$nsx', '$cpu', '$display', '$display_color', '$ram', '$gpu', '$disk','$pin', '$connector', '$weight', '$os', '$color', '$price', '$sale', '$soluong', '$decs', '$promotion', '$insurance', '$type_laptop', '$sub_brand')");

     move_uploaded_file($hinhanh_tmp, $path . $hinhanh);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Quản lý sản phẩm</title>
     <link rel="stylesheet" href="./css/app.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
     <script src="https://kit.fontawesome.com/c7202ffe49.js" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
     <link rel="shortcut icon" href="../UserPage/Foods/Logo-footer.png" type="image/vnd.microsoft.icon">
     <link href="https://fonts.googleapis.com/css?family=Google+Sans:100,300,400,500,700,900,100i,300i,400i,500i,700i,900i" rel="stylesheet">
</head>

<body>
     <header>
          <?php
          include("./Modules/top-nav.php")
          ?>
     </header>
     <h1>QUẢN LÝ SẢN PHẨM</h1>
     <button id="open-modal" class="modal__button" data-modal-target="#modal">
          <i class="fas fa-plus add-laptop-btn"></i>
     </button>

     <?php
     include("./Modules/themsanpham.php");
     ?>

     <div id="overlay"></div>

     <div>
          <form action="" class="search-box">
               <input type="text" name="laptop-search" class="search" placeholder="Nhập tên laptop muốn tìm">
               <label for="product-search">
                    <i class="fas fa-search search-icon"></i>
                    <input type="submit" name="product-search" id="product-search" style="display: none;">
               </label>
          </form>
     </div>

     <div class="product-list">
          <table>
               <thead>
                    <tr>
                         <th class="title">
                              <div class="w300px">
                                   Tên Laptop
                              </div>
                         </th>
                         <th class="title">
                              <div class="w150px">
                                   ID
                              </div>
                         </th>
                         <th class="title">
                              <div class="w150px">
                                   NSX
                              </div>
                         </th>
                         <th class="title">
                              <div class="w300px">
                                   Thương hiệu nhánh
                              </div>
                         </th>
                         <th class="title">
                              <div class="w200px">
                                   Loại laptop
                              </div>
                         </th>
                         <th class="title">
                              <div class="w200px">
                                   MPN
                              </div>
                         </th>
                         <th class="title">
                              <div class="w200px">
                                   SKU
                              </div>
                         </th>
                         <th class="title">
                              <div class="w300px">
                                   CPU
                              </div>
                         </th>
                         <th class="title">
                              <div class="w300px">
                                   GPU
                              </div>
                         </th>
                         <th class="title">
                              <div class="w300px">
                                   RAM
                              </div>
                         </th>
                         <th class="title">
                              <div class="w300px">
                                   Lưu trữ
                              </div>
                         </th>
                         <th class="title">
                              <div class="w300px">
                                   Màn hình
                              </div>
                         </th>
                         <th class="title">
                              <div class="w300px">
                                   Độ bao phủ màu
                              </div>
                         </th>
                         <th class="title">
                              <div class="w150px">
                                   Pin
                              </div>
                         </th>
                         <th class="title">
                              <div class="w400px">
                                   Cổng kết nối
                              </div>
                         </th>
                         <th class="title">
                              <div class="w150px">
                                   Cân nặng
                              </div>
                         </th>
                         <th class="title">
                              <div class="w200px">
                                   HDH
                              </div>
                         </th>
                         <th class="title">
                              <div class="w200px">
                                   Màu máy
                              </div>
                         </th>
                         <th class="title">
                              <div class="w200px">
                                   Giá máy
                              </div>
                         </th>
                         <th class="title">
                              <div class="w200px">
                                   Giá khuyến mãi
                              </div>
                         </th>
                         </th>
                         <th class="title">
                              <div class="w400px">
                                   Chế độ bảo hành
                              </div>
                         </th>
                         <th class="title">
                              <div class="w400px">
                                   Khuyến mãi
                              </div>
                         </th>
                         <th class="title">
                              <div class="w400px">
                                   Mô tả
                              </div>
                         </th>

                         <th class="title">
                              <div class="w150px">
                                   Số lượng
                              </div>
                         </th>
                         <th class="title">
                              <div class="w100px">
                                   Edit
                              </div>
                         </th>
                    </tr>
               </thead>

               <tbody>

                    <?php
                    require_once('../DB/DBHelper.php')
                    ?>

                    <?php
                    $sql_productList = "SELECT products.*, sub_brand.sub_brand_name, producer.producer_name, laptop_type.laptop_type_name FROM products JOIN producer JOIN sub_brand JOIN laptop_type ON products.producer_id = producer.producer_id AND products.sub_brand_id = sub_brand.sub_brand_id AND products.type_id = laptop_type.laptop_type_id ORDER BY product_id DESC";
                    $row_productList = executeResult($sql_productList);

                    foreach ($row_productList as $productList) {
                         echo '
                              <tr>
                                   <td class="product-table">
                                        <div class="w300px pro-name-box">
                                             <img src="../uploads/' . $productList['thumbnail'] . '" class="img-product-box">
                                             <span>
                                                  ' . $productList['name'] . '
                                             </span>            
                                        </div>
                                   </td>

                                   <td class="product-table">
                                        <div class="w150px">
                                             ' . $productList['product_id'] . '
                                        </div>
                                   </td>
                                   
                                   <td class="product-table">
                                        <div class="w150px">
                                             ' . $productList['producer_name'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w300px">
                                             ' . $productList['sub_brand_name'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w200px">
                                             ' . $productList['laptop_type_name'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w200px">
                                             ' . $productList['mpn'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w200px">
                                             ' . $productList['sku'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w300px">
                                             ' . $productList['cpu'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w300px">
                                             ' . $productList['gpu'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w300px">
                                             ' . $productList['ram'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w300px">
                                             ' . $productList['disk'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w300px">
                                             ' . $productList['display'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w300px">
                                             ' . $productList['color_coverage'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w150px">
                                             ' . $productList['pin'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w400px">
                                             ' . $productList['connector'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w150px">
                                             ' . $productList['weight'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w200px">
                                             ' . $productList['os'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w200px">
                                             ' . $productList['color'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w200px">
                                             ' . $productList['price'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w200px">
                                             ' . $productList['sale'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w400px">
                                             ' . $productList['insurance'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w400px">
                                             ' . $productList['promotion'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w400px">
                                             <div class="max-content"
                                                       ' . $productList['decs'] . '
                                             </div>
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w150px">
                                             ' . $productList['soluong'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w100px">
                                             <a href="./Modules/suasanpham.php?id=' . $productList['product_id'] . '" class="editbtn btn"><i class="fas fa-pen"></i></a>
                                             <a href="./Modules/xoasanpham.php?id=' . $productList['product_id'] . '" class="editbtn btn"><i class="far fa-trash-alt"></i></a>
                                        </div>
                                   </td>
                              </tr>';
                    }
                    ?>
               </tbody>
          </table>
     </div>

     <script src="../JS/popup-modal.js"></script>
     <script src="../JS/2-dropdown.js"></script>
     <script>
          CKEDITOR.replace('mota');
     </script>

</body>

</html>