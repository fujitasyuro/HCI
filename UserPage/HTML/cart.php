<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Giỏ hàng | BuyLAP</title>
     <link rel="stylesheet" href="../CSS/Stype.css">
     <script src="https://kit.fontawesome.com/c7202ffe49.js" crossorigin="anonymous"></script>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
     <link rel="shortcut icon" href="../Foods/Logo-footer.png" type="image/vnd.microsoft.icon">
     <link href="https://fonts.googleapis.com/css?family=Google+Sans:100,300,400,500,700,900,100i,300i,400i,500i,700i,900i" rel="stylesheet">

</head>

<body>
     <?php
     include("../modules/top-nav.php");
     include("../modules/brand-bar.php");
     ?>

     <div class="path">
          <Span class="logo-name logo-path">BuyLap / Giỏ hàng</Span>
     </div>

     <main>
          <span class="giohang-title">
               Giỏ hàng
          </span>
          <span class="giohang-title">(</span>
          <span class="giohang-title" id="giohangTitle">0</span>
          <span class="giohang-title">)</span>

          <div class="cart-container">
               <!-- <div class="left-content">
                    <div class="cart-img">
                         <img src="../Foods/new-laptop-1.png" class="cart-lap1">
                    </div>
                    <div class="cart-desc">
                         <h2 class="product-name">Dell XPS 17 9700</h2>

                         <div class="sku">
                              <span class="desc-title">
                                   SKU:
                              </span>

                              <span class="desc-text">
                                   XPS17970005NF
                              </span>
                         </div>

                         <div class="quantity">
                              <span class="quantity-number">
                                   Số lượng:
                                   <input type="number" min="1" max="5" value="1">
                              </span>
                              <span class="quantity-delete">
                                   Xóa
                              </span>
                         </div>

                         <div class="gift-cart">
                              <div>
                                   <i class="fas fa-gift desc-icon"></i>
                                   <span class="desc-title">
                                        Ưu đãi khi mua kèm
                                   </span>
                              </div>

                              <div class="gift-cart-info">
                                   <i class="fas fa-info-circle desc-icon"></i>
                                   <span>
                                        Giảm
                                   </span>
                                   <Span class="price-desc">
                                        20%
                                   </Span>
                                   <span>
                                        , áp dụng tối đa 1 sản phẩm thuộc Phụ kiện giảm giá 20% mua kèm Laptop
                                   </span>
                              </div>
                         </div>
                    </div>
               </div> -->

               <!-- <div class="right-content">
                    <div class="tam-tinh">
                         <span>
                              Tạm tính:
                         </span>
                         <span>
                              64.990.000 ₫
                         </span>
                    </div>

                    <div class="thanh-tien">
                         <span>
                              Thành tiền:
                         </span>
                         <span class="red-text">
                              64.990.000 ₫
                         </span>
                    </div>

                    <div class="dat-hang">
                         <div class="dat-hang-buttom">
                              <a href="./info.php">
                                   Tiến hành đặt hàng
                              </a>
                         </div>

                         <div class="tra-gop-buttom">
                              <p>
                                   Tính trả góp
                              </p>
                         </div>
                    </div>
               </div> -->
          </div>
     </main>

     <script src="../../JS/cart-display.js"></script>

     <div class="footer-bg">
          <footer class="footer">
               <div class="top">
                    <div class="logo-footer">
                         <a href="./Main.html">
                              <a href="./index.html">
                                   <img src="../Foods/Logo-footer.png" alt="BuyLAP" class="logo-footer-img">
                              </a>
                         </a>
                         <samp class="logo-name-footer">BuyLAP</samp>
                    </div>
                    <div class="email">
                         <p class="email-title">
                              Email
                         </p>
                         <p class="email-address">
                              vub1910606@student.ctu.edu.vn
                         </p>
                    </div>
               </div>
               <div class="mid">
                    <div class="device-and-service">
                         <p class="device-and-service-title">
                              Sản phẩm và dịch vụ
                         </p>
                         <div class="list-box">
                              <ul class="list-device-and-service">
                                   <li>
                                        <a href="./producer.html">Laptop Dell</a>
                                   </li>
                                   <li>
                                        <a href="./producer.html">Laptop HP</a>
                                   </li>
                                   <li>
                                        <a href="./producer.html">Laptop Lenovo</a>
                                   </li>
                                   <li>
                                        <a href="./producer.html">Laptop Razer</a>
                                   </li>
                              </ul>
                              <ul class="list-device-and-service">
                                   <li>
                                        <a href="./producer.html">Macbook</a>
                                   </li>
                                   <li>
                                        <a href="./producer.html">Laptop Asus</a>
                                   </li>
                                   <li>
                                        <a href="./producer.html">Laptop Acer</a>
                                   </li>
                                   <li>
                                        <a href="./producer.html">Laptop LG</a>
                                   </li>
                              </ul>
                         </div>
                    </div>

                    <div class="policy">
                         <p class="policy-title">
                              Chính sách
                         </p>
                         <div class="list-box">
                              <ul class="list-policy">
                                   <li>
                                        <a href="#">Bảo hành</a>
                                   </li>
                                   <li>
                                        <a href="#">Vận chuyển</a>
                                   </li>
                                   <li>
                                        <a href="#">Thanh toán</a>
                                   </li>
                              </ul>
                         </div>
                    </div>

                    <div class="about-us">
                         <p class="about-us-title">
                              Về BuyLAP
                         </p>
                         <div class="list-box">
                              <ul class="list-about-us">
                                   <li>
                                        <a href="#">Lịch sử thành lập</a>
                                   </li>
                                   <li>
                                        <a href="#">Giá trị cốt lõi</a>
                                   </li>
                                   <li>
                                        <a href="#">Tầm nhìn, Sứ mệnh</a>
                                   </li>
                              </ul>
                         </div>
                    </div>
               </div>

               <div class="bottom">
                    <p class="copyright">
                         Copyright (C) Phạm Tuấn Vũ
                    </p>
               </div>
          </footer>
     </div>
</body>

</html>