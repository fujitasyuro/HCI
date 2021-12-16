<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Đặt hàng | BuyLAP</title>
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
          <Span class="logo-name logo-path">BuyLap / Giỏ hàng / Đặt hàng</Span>
     </div>

     <main>
          <h1>Đặt hàng</h1>

          <div class="don-hang">
               <div class="user-info">
                    <form action="#" method="get">
                         <div class="user-details">
                              <p class="details">
                                   Thông tin người nhận
                              </p>

                              <div class="top-input">
                                   <div>
                                        <input type="text" max="50" placeholder="Họ và tên" required>
                                   </div>

                                   <div>
                                        <input type="tel" max="11" placeholder="Số điện thoại" required>
                                   </div>
                              </div>

                              <p class="details">
                                   Địa chỉ
                              </p>

                              <div class="mid-input">
                                   <div>
                                        <input type="text" max="50" placeholder="Tỉnh / Thành phố" required>
                                   </div>

                                   <div>
                                        <input type="text" max="50" placeholder="Quận / Huyện" required>
                                   </div>

                                   <div>
                                        <input type="text" max="50" placeholder="Phường / Xã" required>
                                   </div>
                              </div>

                              <div class="bottom-input">
                                   <input type="text" min="1" max="250" placeholder="Số nhà, tên đường, phường xã" required>
                              </div>
                         </div>

                         <div class="bottom-button">
                              <a href="./index.php" class="done">Hoàn tất đặt hàng</a>

                              <a href="./pay.html" class="pay-button">
                                   Thanh toán Online
                              </a>
                         </div>
                    </form>
               </div>

               <div class="cart-info">
                    <div class="change">
                         <div>
                              <span>
                                   Đơn hàng (
                              </span>
                              <span id="cartNumber">0</span>
                              <span>
                                   SP)
                              </span>
                         </div>
                         <div>
                              <a href="./cart.php">Sửa
                                   <i class="fas fa-angle-right page-number-icon"></i>
                              </a>
                         </div>
                    </div>
                    <div class="cart-product">
                         <span class="c-p-number">
                              x1
                         </span>
                         <span class="c-p-name">
                              Dell XPS 17 9700
                         </span>
                    </div>

                    <div class="tam-tinh">
                         <span>
                              Tạm tính:
                         </span>
                         <div class="box-tien">
                              <span id="tamtinh">
                                   0
                              </span>
                              <span class="vnd">
                                   Triệu
                              </span>
                         </div>
                    </div>

                    <div class="thanh-tien">
                         <span>
                              Thành tiền:
                         </span>
                         <div class="box-tien">
                              <span class="red-text" id="thanhtien">
                                   0
                              </span>
                              <span class="red-text vnd">
                                   Triệu
                              </span>
                         </div>
                    </div>
               </div>
          </div>
     </main>

     <script>
          function onLoadCartNumbers() {
               var productNumbers = localStorage.getItem('cartNumbers');

               if (productNumbers) {
                    document.querySelector('#numbersCart span').textContent = productNumbers;
                    document.querySelector('#cartNumber').textContent = productNumbers;
               }

               console.log(productNumbers);
          }
          onLoadCartNumbers();
     </script>

     <script>
          let cartCost = localStorage.getItem('totalCost');

          if (cartCost) {
               document.querySelector('#thanhtien').textContent = cartCost;
               document.querySelector('#tamtinh').textContent = cartCost;
          }
     </script>

</body>

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

</html>