<div class="top-nav">
     <a href="../HTML/index.php" class="logo">
          <img src="../Foods/Logo.png" alt="BuyLAP" class="logo-img">
     </a>
     <samp>
          <a href="./index.php" class="logo-name">BuyLAP</a>
     </samp>
     <div class="search">
          <input type="text" class="search-input" placeholder="Nhập mã hoặc tên sản phẩm ...">
          <i class="fas fa-search search-icon"></i>
     </div>
     <div class="avata">
          <?php
          session_start();
          if (!isset($_SESSION["user"])) {
          ?>
               <i class="fas fa-user cart-icon user-icon"></i>
               <div class="user-menu">
                    <ul>
                         <li>
                              <a href="./dangnhap.php" class="user-option">Đăng nhập</a>
                         </li>
                         <li>
                              <a href="./dangky.php" class="user-option">Đăng ký</a>
                         </li>
                    </ul>
               </div>
          <?php
          } else {
          ?>
               <img class="user-img" src="../Foods/Comp 1_00000.jpg">
               <div class="user-menu">
                    <ul>
                         <li>
                              <a href="./donhang.php" class="user-option">Đơn hàng</a>
                         </li>
                         <li>
                              <a href="./xulydangxuat.php" class="user-option">Đăng xuất</a>
                         </li>
                    </ul>
               </div>
          <?php
          }
          ?>
     </div>
     <div class="cart">
          <?php
          if (!isset($_SESSION["user"])) {
          ?>
               <div class="number-cart" id="numbersCart">
                    <span class="number-red">0</span>
               </div>
               <a href="../HTML/dangnhap.php">
                    <i class="fas fa-shopping-cart cart-icon "></i>
               </a>
          <?php
          } else {
          ?>
               <div class="number-cart" id="numbersCart">
                    <span class="number-red">0</span>
               </div>
               <a href="../HTML/cart.php">
                    <i class="fas fa-shopping-cart cart-icon "></i>
               </a>
          <?php
          }
          ?>
     </div>

     <div class="noti">
          <div class="number-noti">
               <span class="number-red">0</span>
          </div>
          <a href="#">
               <i class="fas fa-bell noti-icon"></i>
          </a>
     </div>
</div>