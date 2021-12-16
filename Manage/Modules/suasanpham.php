<?php
require_once('../../DB/DBHelper.php');
require_once('../../DB/connect.php');
?>

<?php
if (isset($_POST['suasanpham'])) {
     $laptop_name = $_POST['tensanpham'];
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
     $hinhanh = $_FILES['anhlaptop']['name'];
     $hinhanh_tmp = $_FILES['anhlaptop']['tmp_name'];

     $path = '../uploads/';
     $sql_insert_product = mysqli_query($connect, "UPDATE products SET name = '" . $laptop_name . "', thumbnail = '" . $hinhanh . "', soluong = '" . $soluong . "', decs = '" . $decs . "', price = '" . $price . "', sale = '" . $sale . "', cpu = '" . $cpu . "', gpu = '" . $gpu . "', ram = '" . $ram . "', disk = '" . $disk . "', connector = '" . $connector . "', promotion = '" . $promotion . "', insurance = '" . $insurance . "', mpn = '" . $mpn . "', sku = '" . $sku . "' WHERE product_id = '$_GET[id]'");

     move_uploaded_file($hinhanh_tmp, $path . $hinhanh);

     header('Location:../quanlysanpham.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Sửa SP</title>
     <link rel="stylesheet" href="../css/app.css">
     <script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
     <div id="modal" class="modal-edit__container">
          <form action="" class="modal__content" method="POST" enctype="multipart/form-data">
               <?php
               $sql_productEdit = "SELECT products.*, sub_brand.sub_brand_name, producer.producer_name, laptop_type.* FROM products JOIN producer JOIN sub_brand JOIN laptop_type ON products.producer_id = producer.producer_id AND products.sub_brand_id = sub_brand.sub_brand_id AND products.type_id = laptop_type.laptop_type_id AND products.product_id = '$_GET[id]'";

               $row_productEdit = executeResult($sql_productEdit);

               foreach ($row_productEdit as $productEdit) {
                    echo '
                         <div class="themsanpham-box">
                              <div class="choose-nsx mini-box">
                                   <label for="nsx-chosse">
                                        <span>Chọn / Thêm NSX:</span>
                                        <select id="nsx-chosse" class="input-text" name="nsx" onchange="FetchNSX(this.value)">
                                             <option value="' . $productEdit['producer_id'] . '">' . $productEdit['producer_name'] . '</option>
                                        </select>
                                   </label>
                                   <a href="./nsx.php" class="add-btn">
                                        <span>+</span>
                                   </a>
                              </div>

                              <div class="choose-sub mini-box">
                                   <label for="sub">
                                        <span>Chọn / Thêm thương hiệu nhánh:</span>
                                        <select id="sub" class="input-text" name="sub">
                                             <option value="' . $productEdit['sub_brand_id'] . '">' . $productEdit['sub_brand_name'] . '</option>
                                        </select>
                                   </label>
                                   <a href="./nsx.html" class="add-btn">
                                        <span>+</span>
                                   </a>
                              </div>

                              <div class="choose-type mini-box">
                                   <label for="type">
                                        <span>Chọn / Thêm loại Laptop:</span>
                                        <select id="type" class="input-text" name="typelaptop">
                                             <option value="' . $productEdit['laptop_type_id'] . '">' . $productEdit['laptop_type_name'] . '</option>
                                        </select>
                                   </label>
                                   <button class="add-btn" id="open-mini-modal" data-modal-target="#modal">
                                        <span>+</span>
                                   </button>
                              </div>

                              <div class="name-laptop mini-box">
                                   <label for="name">
                                        <span>Tên Laptop:</span>
                                        <input type="text" id="name" class="input-text" value="' . $productEdit['name'] . '" name="tensanpham">
                                   </label>
                              </div>

                              <div class="img-laptop mini-box">
                                   <label for="file">
                                        <span>Ảnh Laptop:</span>
                                        <div class="upload-box">
                                             <input type="file" id="file" hidden name="anhlaptop" value="' . $productEdit['thumbnail'] . '">
                                             <label for="file" class="upload" id="selector">' . $productEdit['thumbnail'] . '</label>
                                             <script src="../../JS/upload.js"></script>
                                        </div>
                                   </label>
                              </div>

                              <div class="mpn mini-box">
                                   <label for="mpn">
                                        <span>MPN:</span>
                                        <input type="text" name="mpn" id="mpn" class="input-text" value="' . $productEdit['mpn'] . '">
                                   </label>
                              </div>
                              <div class="sku mini-box">
                                   <label for="sku">
                                        <span>SKU:</span>
                                        <input type="text" name="sku" id="sku" class="input-text" value="' . $productEdit['sku'] . '">
                                   </label>
                              </div>
                              <div class="cpu mini-box">
                                   <label for="cpu">
                                        <span>CPU:</span>
                                        <input type="text" name="cpu" id="cpu" class="input-text" value="' . $productEdit['cpu'] . '">
                                   </label>
                              </div>

                              <div class="gpu mini-box">
                                   <label for="gpu">
                                        <span>GPU:</span>
                                        <input type="text" name="gpu" id="gpu" class="input-text" value="' . $productEdit['gpu'] . '">
                                   </label>
                              </div>

                              <div class="ram mini-box">
                                   <label for="ram">
                                        <span>RAM:</span>
                                        <input type="text" name="ram" id="ram" class="input-text" value="' . $productEdit['ram'] . '">
                                   </label>
                              </div>

                              <div class="disk mini-box">
                                   <label for="disk">
                                        <span>Lưu trữ:</span>
                                        <input type="text" name="disk" id="disk" class="input-text" value="' . $productEdit['disk'] . '">
                                   </label>
                              </div>

                              <div class="display mini-box">
                                   <label for="display">
                                        <span>Màn hình:</span>
                                        <input type="text" name="display" id="display" class="input-text" value="' . $productEdit['display'] . '">
                                   </label>
                              </div>

                              <div class="dis-color mini-box">
                                   <label for="dis-color">
                                        <span>Độ bao phủ màu:</span>
                                        <input type="text" name="dis-color" id="dis-color" class="input-text" value="' . $productEdit['color_coverage'] . '">
                                   </label>
                              </div>

                              <div class="pin mini-box">
                                   <label for="pin">
                                        <span>Pin:</span>
                                        <input type="text" name="pin" id="pin" class="input-text" value="' . $productEdit['pin'] . '">
                                   </label>
                              </div>

                              <div class="connecter mini-box">
                                   <label for="connector">
                                        <span>Cổng kết nối:</span>
                                        <input type="text" name="connector" id="connector" class="input-text" value="' . $productEdit['connector'] . '">
                                   </label>
                              </div>

                              <div class="weight mini-box">
                                   <label for="weight">
                                        <span>Cân nặng:</span>
                                        <input type="text" name="weight" id="weight" class="input-text" value="' . $productEdit['weight'] . '">
                                   </label>
                              </div>

                              <div class="os mini-box">
                                   <label for="os">
                                        <span>Hệ điều hành:</span>
                                        <input type="text" name="os" id="os" class="input-text" value="' . $productEdit['os'] . '">
                                   </label>
                              </div>

                              <div class="color mini-box">
                                   <label for="color">
                                        <span>Màu máy:</span>
                                        <input type="text" name="color" id="color" class="input-text" value="' . $productEdit['color'] . '">
                                   </label>
                              </div>

                              <div class="price mini-box">
                                   <label for="price">
                                        <span>Giá máy:</span>
                                        <input type="text" name="price" id="price" class="input-text" value="' . $productEdit['price'] . '">
                                   </label>
                              </div>

                              <div class="sale mini-box">
                                   <label for="sale">
                                        <span>Giá khuyến mãi:</span>
                                        <input type="text" name="sale" id="sale" class="input-text" value="' . $productEdit['sale'] . '">
                                   </label>
                              </div>

                              <div class="baohanh mini-box">
                                   <label for="baohanh">
                                        <span class="baohanh-title">Chế độ bảo hành:</span>
                                        <textarea name="baohanh" id="baohanh" cols="62" rows="5" class="textbox" value="' . $productEdit['insurance'] . '"></textarea>
                                   </label>
                              </div>

                              <div class="khuyenmai mini-box">
                                   <label for="khuyenmai">
                                        <span class="baohanh-title">Khuyến mãi:</span>
                                        <textarea name="khuyenmai" id="khuyenmai" cols="62" rows="5" class="textbox" value="' . $productEdit['promotion'] . '"></textarea>
                                   </label>
                              </div>

                              <div class="the-number mini-box">
                                   <label for="the-number">
                                        <span>Số lượng máy:</span>
                                        <input type="text" name="the-number" id="the-number" class="input-text" value="' . $productEdit['soluong'] . '">
                                   </label>
                              </div>

                              <div class="mota ">
                                   <label for="mota">
                                        <span class="mota-title">Mô tả:</span>
                                        <textarea name="decs" id="mota" cols="62" rows="5" class="textbox" value="' . $productEdit['decs'] . '"></textarea>
                                   </label>
                              </div>

                              <div class="btn-box">
                                   <input type="submit" value="Sửa" class="btn" name="suasanpham">
                                   <a href="../quanlysanpham.php" class="btn">Quay lại</a>
                              </div>
                         </div>';
               }
               ?>
          </form>
     </div>

     <script src="../JS/2-dropdown.js"></script>
     <script>
          CKEDITOR.replace('mota');
     </script>
</body>

</html>