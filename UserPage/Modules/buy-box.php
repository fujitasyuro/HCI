<?php
// session_start();

$sql_details = mysqli_query($connect, "SELECT * FROM products WHERE products.product_id='$_GET[id]'")
?>

<?php
if (!isset($_SESSION["user"])) {
?>
     <?php
     while ($details = mysqli_fetch_array($sql_details)) {
     ?>
          <div class="buy-box-main">
               <div class="buy-box">
                    <div class="hotline">
                         <p class="hotline-title">
                              Hotline
                         </p>
                         <span class="phone-number">
                              1900.00.0000
                         </span>
                    </div>

                    <p class="sale salebuy1" id="sale"> <?php echo $details['sale'] ?></p>
                    <div class="price-box">
                         <p class="big-price" id="price"><?php echo $details['price'] ?></p>
                         <span class="big-price tiente">VND</span>
                    </div>

                    <div class="add add-none-account" id="add-none-account">
                         <label for="add-cart" id="add-cart">
                              <i class="fas fa-shopping-cart"></i>
                              <button>
                                   <a href="./dangnhap.php">Vui lòng đăng nhập</a>
                              </button>
                         </label>
                    </div>

                    <span id="idProduct" style="display: none;"><?php echo $details['product_id'] ?></span>

                    <div class="compare">
                         <i class="fas fa-plus"></i>
                         <span>
                              Thêm vào so sánh
                         </span>
                    </div>

                    <i class="far fa-heart"></i>

               </div>
          </div>
     <?php
     }
     ?>
<?php
} else {
?>
     <?php
     while ($details = mysqli_fetch_array($sql_details)) {
     ?>
          <div class="buy-box-main">
               <div class="buy-box">
                    <div class="hotline">
                         <p class="hotline-title">
                              Hotline
                         </p>
                         <span class="phone-number">
                              1900.00.0000
                         </span>
                    </div>

                    <p class="sale salebuy" id="sale"> <?php echo $details['sale'] ?></p>
                    <div class="price-box">
                         <p class="big-price" id="price"><?php echo $details['price'] ?></p>
                         <span class="big-price tiente">VND</span>
                    </div>

                    <div class="add">
                         <label for="add-cart" id="add-cart">
                              <i class="fas fa-shopping-cart"></i>
                              <button>
                                   Thêm vào giỏ hàng
                              </button>
                         </label>
                    </div>

                    <span id="idProduct" style="display: none;"><?php echo $details['product_id'] ?></span>

                    <div class="compare">
                         <i class="fas fa-plus"></i>
                         <span>
                              Thêm vào so sánh
                         </span>
                    </div>

                    <i class="far fa-heart"></i>

               </div>
          </div>
     <?php
     }
     ?>
<?php
}
?>