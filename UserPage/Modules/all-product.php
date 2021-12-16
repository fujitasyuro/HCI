<?php
$orderPrice = "";
$orderField = isset($_GET['field']) ? $_GET['field'] : "";
$orderSort = isset($_GET['sort']) ? $_GET['sort'] : "";
if (
     !empty($orderField)
     && !empty($orderSort)
) {
     $orderPrice = "ORDER BY `products`.`" . $orderField . "` " . $orderSort;
}
?>

<div class="top-container">
     <div class="left-tcont">
          <span class="desc-title">
               1 - 20
          </span>

          <span>
               trên 40 sản phẩm
          </span>
     </div>

     <div class="mid-tcont">
          <div>
               <select name="" id="sort-box" class="sapxep" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                    <option value="">Sắp xếp theo</option>
                    <option value="?field=price&sort=asc">Giá tăng dần</option>
                    <option value="?field=price&sort=desc">Giá giảm dần</option>
               </select>
          </div>
     </div>

     <div class="righttcont">
          <i class="fas fa-list view-op icon-view" view-data="list-view"></i>

          <i class="fas fa-th-large view-op icon-view-active icon-view" view-data="grid-view"></i>
     </div>
</div>

<div class="mainview">
     <div class="main-content">
          <div class="left-container">

               <!-- THƯƠNG HIỆU NHÁNH -->

               <div class="thuong-hieu-nhanh">
                    <div class="op-header">
                         <span class="left-op-title">
                              Thương hiệu nhánh
                         </span>
                         <i class="fas fa-plus left-op-icon"></i>
                         <i class="fas fa-minus left-op-icon icon-active"></i>
                    </div>
                    <ul>
                         <li class="left-op-check">
                              <input type="checkbox">Latitude
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">XPS
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">Precision
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">Inspiron
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">Gaming G Series
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">Alienware
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">Vostro
                         </li>
                    </ul>
               </div>

               <!-- KHOẢNG GIÁ -->

               <div class="khoang-gia">
                    <div class="op-header">
                         <span class="left-op-title">
                              Khoảng giá
                         </span>

                         <i class="fas fa-plus left-op-icon"></i>
                         <i class="fas fa-minus left-op-icon icon-active"></i>
                    </div>
                    <ul>
                         <li class="left-op-check">
                              <input type="checkbox">Trên 50 triệu
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">40 - 50 triệu
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">30 - 40 triệu
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">20 - 30 triệu
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">15 - 20 triệu
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">10 - 15 triệu
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">Dưới 10 triệu
                         </li>
                    </ul>
               </div>

               <!-- LOẠI HÀNG -->

               <div class="loai-hang">
                    <div class="op-header">
                         <span class="left-op-title">
                              Loại hàng
                         </span>

                         <i class="fas fa-plus left-op-icon"></i>
                         <i class="fas fa-minus left-op-icon icon-active"></i>
                    </div>
                    <ul>
                         <li class="left-op-check">
                              <input type="checkbox">Chính hãng
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">Nhập khẩu
                         </li>
                    </ul>
               </div>

               <!-- CPU -->

               <div class="cpu">
                    <div class="op-header">
                         <span class="left-op-title">
                              CPU
                         </span>

                         <i class="fas fa-plus left-op-icon"></i>
                         <i class="fas fa-minus left-op-icon icon-active"></i>
                    </div>
                    <ul>
                         <li class="left-op-check">
                              <input type="checkbox">Intel Core i3
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">Intel Core i5
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">Intel Core i7
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">Intel Core i9
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">AMD Ryzen 3
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">AMD Ryzen 5
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">AMD Ryzen 7
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">AMD Ryzen 9
                         </li>
                    </ul>
               </div>

               <!-- GPU -->
               <div class="gpu">
                    <div class="op-header">
                         <span class="left-op-title">
                              GPU
                         </span>

                         <i class="fas fa-plus left-op-icon"></i>
                         <i class="fas fa-minus left-op-icon icon-active"></i>
                    </div>
                    <ul>
                         <li class="left-op-check">
                              <input type="checkbox">Intel HD
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">Intel Iris
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">Nvidia Geforce
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">Nvidia Quadro
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">AMD Radeon
                         </li>
                    </ul>
               </div>

               <!-- RAM -->

               <div class="ram">
                    <div class="op-header">
                         <span class="left-op-title">
                              RAM
                         </span>

                         <i class="fas fa-plus left-op-icon"></i>
                         <i class="fas fa-minus left-op-icon icon-active"></i>
                    </div>
                    <ul>
                         <li class="left-op-check">
                              <input type="checkbox">4 GB
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">8 GB
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">16 GB
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">32 GB
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">64 GB
                         </li>
                    </ul>
               </div>

               <!-- Ổ CỨNG -->

               <div class="o-cung">
                    <div class="op-header">
                         <span class="left-op-title">
                              Loại hàng
                         </span>

                         <i class="fas fa-plus left-op-icon"></i>
                         <i class="fas fa-minus left-op-icon icon-active"></i>
                    </div>
                    <ul>
                         <li class="left-op-check">
                              <input type="checkbox">SSD
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">HDD
                         </li>
                    </ul>
               </div>

               <!-- KÍCH THƯỚC MÀN HÌNH -->

               <div class="kich-thuoc-man-hinh">
                    <div class="op-header">
                         <span class="left-op-title">
                              Kích thước màn hình
                         </span>
                         <i class="fas fa-plus left-op-icon"></i>
                         <i class="fas fa-minus left-op-icon icon-active"></i>
                    </div>
                    <ul>
                         <li class="left-op-check">
                              <input type="checkbox">
                              < 13" </li>
                         <li class="left-op-check">
                              <input type="checkbox">13 - 13.9"
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">14 - 14.9"
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">15 - 15.9"
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">16 - 17"
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">> 17"
                         </li>
                    </ul>
               </div>

               <!-- ĐỘ PHÂN GIẢI -->

               <div class="do-phan-giai">
                    <div class="op-header">
                         <span class="left-op-title">
                              Độ phân giải
                         </span>
                         <i class="fas fa-plus left-op-icon"></i>
                         <i class="fas fa-minus left-op-icon icon-active"></i>
                    </div>
                    <ul>
                         <li class="left-op-check">
                              <input type="checkbox">HD
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">HD+
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">FHD
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">FHD+
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">2K
                         </li>
                         <li class="left-op-check">
                              <input type="checkbox">4K
                         </li>
                    </ul>
               </div>
          </div>

          <div class="main-container">

               <!-- GRID VIEW -->

               <div class="grid-view view_wrap">
                    <?php
                    $sql = "SELECT * FROM `products` " . $orderPrice . "";
                    $productList = executeResult($sql);

                    foreach ($productList as $std) {
                         echo '
                              <a href="../HTML/product-item.php?id=' . $std['product_id'] . '">
                                   <div class="item-box">
                                        <img src="../../uploads/' . $std['thumbnail'] . '">
                                        <h3>' . $std['name'] . '</h3>
                                        <div>
                                             <span class="item-box-title">
                                                  Giá từ:
                                             </span>
                                             <span class="item-box-title red-text">
                                                  ' . $std['price'] . '
                                             </span>
                                        </div>
                                   </div>
                              </a>';
                    }
                    ?>

               </div>

               <div class="list-view view_wrap">
                    <?php
                    $sql = "SELECT * FROM `products` ORDER BY product_id DESC";
                    $productList = executeResult($sql);

                    foreach ($productList as $std) {
                         echo '
                              <a href="../HTML/product-item.php?id=' . $std['product_id'] . '">
                                   <div class="item-box-list">
                                        <img src="../../uploads/' . $std['thumbnail'] . '">
                                        <div>
                                             <h3>' . $std['name'] . '</h3>
                                             <span class="item-box-title-list">
                                                  Giá từ: 
                                             </span>
                                             <span class="item-box-title-list red-text">
                                                  ' . $std['price'] . '
                                             </span>
                                        </div>
                                   </div>
                              </a>';
                    }
                    ?>
               </div>
          </div>
     </div>
</div>