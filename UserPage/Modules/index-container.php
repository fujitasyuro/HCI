<div class="container">
     <!-- NEW LAPTOP CODE -->
     <div class="new-laptop-title">
          <div class="title">
               <a href="../HTML/all-item.php">
                    Hàng mới về
               </a>
          </div>

          <div class="see-more">
               <a href="../HTML/all-item.php">
                    Xem tất cả
               </a>
          </div>
     </div>
     <div class="new-laptop">
          <button class="previous">
               <i class="fas fa-chevron-left"></i>
          </button>

          <div class="box">
               <?php
               $sql = 'select * from products ORDER BY product_id DESC';
               $productList = executeResult($sql);
               foreach ($productList as $std) {
               ?>
                    <div class="colum">
                         <div>
                              <a href="../HTML/product-item.php?id=<?php echo $std['product_id'] ?>" class="laptop-img-box">
                                   <div>
                                        <img class="laptop-img" src="../../uploads/<?php echo $std['thumbnail'] ?>">
                                   </div>
                              </a>


                              <a href="../HTML/product-item.php?id=<?php echo $std['product_id'] ?>" class="laptop-name break-text"> <?php echo $std['name'] ?></a>

                              <ul class="description">
                                   <li class="break-text">
                                        <span class="desc-title mini-decs">CPU:</span>
                                        <span class="desc-text mini-decs"> <?php echo $std['cpu'] ?></span>
                                   </li>
                                   <li class="break-text">
                                        <span class="desc-title mini-decs">RAM:</span>
                                        <span class="desc-text mini-decs"> <?php echo $std['ram'] ?></span>
                                   </li>
                                   <li class="break-text">
                                        <span class="desc-title mini-decs">GPU:</span>
                                        <span class="desc-text mini-decs"> <?php echo $std['gpu'] ?></span>
                                   </li>
                              </ul>
                              <p class="sale"><?php echo $std['sale'] ?></p>
                              <p class="price" id="price"><?php echo $std['price'] ?>VND</p>
                         </div>
                    </div>
               <?php
               }
               ?>
          </div>

          <button class="next">
               <i class="fas fa-chevron-right"></i>
          </button>
     </div>

     <!-- OFFICE LAPTOP CODE -->
     <div class="office-laptop-title">
          <div class="title">
               <a href="../HTML/producer.php?id=1">
                    LAPTOP VĂN PHÒNG
               </a>
          </div>

          <div class="see-more">
               <a href="../HTML/producer.php?id=1">
                    Xem tất cả
               </a>
          </div>
     </div>

     <div class="office-laptop">
          <button class="previous">
               <i class="fas fa-chevron-left"></i>
          </button>
          <div class="box">
               <!-- <div class="laptop-item"> -->
               <?php
               $sql = 'SELECT * FROM `products` WHERE `type_id` = 1 ORDER BY product_id DESC';
               $productList = executeResult($sql);
               foreach ($productList as $std) {
               ?>
                    <div class="colum">
                         <div>
                              <a href="../HTML/product-item.php?id=<?php echo $std['product_id'] ?>" class="laptop-img-box">
                                   <div>
                                        <img class="laptop-img" src="../../uploads/<?php echo $std['thumbnail'] ?>">
                                   </div>
                              </a>


                              <a href="../HTML/product-item.php?id=<?php echo $std['product_id'] ?>" class="laptop-name break-text"> <?php echo $std['name'] ?></a>

                              <ul class="description">
                                   <li class="break-text">
                                        <span class="desc-title mini-decs">CPU:</span>
                                        <span class="desc-text mini-decs"> <?php echo $std['cpu'] ?></span>
                                   </li>
                                   <li class="break-text">
                                        <span class="desc-title mini-decs">RAM:</span>
                                        <span class="desc-text mini-decs"> <?php echo $std['ram'] ?></span>
                                   </li>
                                   <li class="break-text">
                                        <span class="desc-title mini-decs">GPU:</span>
                                        <span class="desc-text mini-decs"> <?php echo $std['gpu'] ?></span>
                                   </li>
                              </ul>
                              <p class="sale"><?php echo $std['sale'] ?></p>
                              <p class="price" id="price"><?php echo $std['price'] ?>VND</p>
                         </div>
                    </div>
               <?php
               }
               ?>
          </div>
          <button class="next">
               <i class="fas fa-chevron-right"></i>
          </button>
     </div>

     <!-- multimedia -->

     <div class="office-laptop-title">
          <div class="title">
               <a href="../HTML/producer.php?id=4">
                    Multimedia
               </a>
          </div>

          <div class="see-more">
               <a href="../HTML/producer.php?id=4">
                    Xem tất cả
               </a>
          </div>
     </div>

     <div class="office-laptop">

          <button class="previous">
               <i class="fas fa-chevron-left"></i>
          </button>
          <div class="box">
               <?php
               $sql = 'SELECT * FROM `products` WHERE `type_id` = 3 ORDER BY product_id DESC';
               $productList = executeResult($sql);

               foreach ($productList as $std) {
               ?>
                    <div class="colum">
                         <div>
                              <a href="../HTML/product-item.php?id=<?php echo $std['product_id'] ?>" class="laptop-img-box">
                                   <div>
                                        <img class="laptop-img" src="../../uploads/<?php echo $std['thumbnail'] ?>">
                                   </div>
                              </a>


                              <a href="../HTML/product-item.php?id=<?php echo $std['product_id'] ?>" class="laptop-name break-text"> <?php echo $std['name'] ?></a>

                              <ul class="description">
                                   <li class="break-text">
                                        <span class="desc-title mini-decs">CPU:</span>
                                        <span class="desc-text mini-decs"> <?php echo $std['cpu'] ?></span>
                                   </li>
                                   <li class="break-text">
                                        <span class="desc-title mini-decs">RAM:</span>
                                        <span class="desc-text mini-decs"> <?php echo $std['ram'] ?></span>
                                   </li>
                                   <li class="break-text">
                                        <span class="desc-title mini-decs">GPU:</span>
                                        <span class="desc-text mini-decs"> <?php echo $std['gpu'] ?></span>
                                   </li>
                              </ul>
                              <p class="sale"><?php echo $std['sale'] ?></p>
                              <p class="price" id="price"><?php echo $std['price'] ?>VND</p>
                         </div>
                    </div>
               <?php
               }
               ?>
          </div>

          <button class="next">
               <i class="fas fa-chevron-right"></i>
          </button>
     </div>

     <!-- GAMING LAPTOP CODE -->
     <div class="gaming-laptop-title">
          <div class="title">
               <a href="../HTML/producer.php?id=2">
                    LAPTOP GAMING
               </a>
          </div>

          <div class="see-more">
               <a href="../HTML/producer.php?id=2">
                    Xem tất cả
               </a>
          </div>
     </div>

     <div class="gaming-laptop">

          <button class="previous">
               <i class="fas fa-chevron-left"></i>
          </button>
          <div class="box">
               <?php
               $sql = 'SELECT * FROM `products` WHERE `type_id` = 2 ORDER BY product_id DESC';
               $productList = executeResult($sql);

               foreach ($productList as $std) {
               ?>
                    <div class="colum">
                         <div>
                              <a href="../HTML/product-item.php?id=<?php echo $std['product_id'] ?>" class="laptop-img-box">
                                   <div>
                                        <img class="laptop-img" src="../../uploads/<?php echo $std['thumbnail'] ?>">
                                   </div>
                              </a>


                              <a href="../HTML/product-item.php?id=<?php echo $std['product_id'] ?>" class="laptop-name break-text"> <?php echo $std['name'] ?></a>

                              <ul class="description">
                                   <li class="break-text">
                                        <span class="desc-title mini-decs">CPU:</span>
                                        <span class="desc-text mini-decs"> <?php echo $std['cpu'] ?></span>
                                   </li>
                                   <li class="break-text">
                                        <span class="desc-title mini-decs">RAM:</span>
                                        <span class="desc-text mini-decs"> <?php echo $std['ram'] ?></span>
                                   </li>
                                   <li class="break-text">
                                        <span class="desc-title mini-decs">GPU:</span>
                                        <span class="desc-text mini-decs"> <?php echo $std['gpu'] ?></span>
                                   </li>
                              </ul>
                              <p class="sale"><?php echo $std['sale'] ?></p>
                              <p class="price" id="price"><?php echo $std['price'] ?>VND</p>
                         </div>
                    </div>
               <?php
               }
               ?>
          </div>

          <button class="next">
               <i class="fas fa-chevron-right"></i>
          </button>
     </div>

     <!-- Workstation LAPTOP CODE -->

     <div class="gaming-laptop-title">
          <div class="title">
               <a href="../HTML/producer.php?id=2">
                    WORKSTATION
               </a>
          </div>

          <div class="see-more">
               <a href="../HTML/producer.php?id=2">
                    Xem tất cả
               </a>
          </div>
     </div>

     <div class="gaming-laptop">

          <button class="previous">
               <i class="fas fa-chevron-left"></i>
          </button>
          <div class="box">
               <?php
               $sql = 'SELECT * FROM `products` WHERE `type_id` = 4 ORDER BY product_id DESC';
               $productList = executeResult($sql);

               foreach ($productList as $std) {
               ?>
                    <div class="colum">
                         <div>
                              <a href="../HTML/product-item.php?id=<?php echo $std['product_id'] ?>" class="laptop-img-box">
                                   <div>
                                        <img class="laptop-img" src="../../uploads/<?php echo $std['thumbnail'] ?>">
                                   </div>
                              </a>


                              <a href="../HTML/product-item.php?id=<?php echo $std['product_id'] ?>" class="laptop-name break-text"> <?php echo $std['name'] ?></a>

                              <ul class="description">
                                   <li class="break-text">
                                        <span class="desc-title mini-decs">CPU:</span>
                                        <span class="desc-text mini-decs"> <?php echo $std['cpu'] ?></span>
                                   </li>
                                   <li class="break-text">
                                        <span class="desc-title mini-decs">RAM:</span>
                                        <span class="desc-text mini-decs"> <?php echo $std['ram'] ?></span>
                                   </li>
                                   <li class="break-text">
                                        <span class="desc-title mini-decs">GPU:</span>
                                        <span class="desc-text mini-decs"> <?php echo $std['gpu'] ?></span>
                                   </li>
                              </ul>
                              <p class="sale"><?php echo $std['sale'] ?></p>
                              <p class="price" id="price"><?php echo $std['price'] ?>VND</p>
                         </div>
                    </div>
               <?php
               }
               ?>
          </div>

          <button class="next">
               <i class="fas fa-chevron-right"></i>
          </button>
     </div>
</div>