<?php
$sql_details = "SELECT products.*, producer.producer_name FROM products, producer WHERE producer.producer_id = products.producer_id AND products.product_id='$_GET[id]' ORDER BY product_id DESC";
$query_details = executeResult($sql_details);

foreach ($query_details as $details) {
     echo '
          <div class="conteiner-item">
               <div>
               <div class="product-img">
                    <div class="product-img-box">
                         <img src="../../uploads/' . $details['thumbnail'] . '">
                    </div>
               </div>

               <span id="img" style="display: none;">' . $details['thumbnail'] . '</span>

               <div class="other">
                    <div class="insurance">
                         <span class="other-title">
                              Bảo hành
                         </span>
                         <div>
                              <ul>
                                   <li class="desc-text">
                                        <Span>
                                             Bảo hành
                                             <strong>12 tháng tại BuyLAP</strong>
                                        </Span>
                                   </li>

                                   <li class="desc-text">
                                        <Span>
                                             Đổi mới trong 15 ngày đầu tiên
                                        </Span>
                                   </li>
                              </ul>
                         </div>
                    </div>

                    <div class="office">
                         Giảm 550.000đ khi mua Microsoft Office 365 kèm laptop
                    </div>
               </div>
          </div>

               <!-- TÊN + MÃ SP -->

               <div class="product-desc">
                    <div class="desc">
                         <h1 class="product-name" id="name">' . $details['name'] . '</h1>

                         <div class="sku">
                              <div class="sku1">
                                   <span class="desc-title">
                                        SKU:
                                   </span>
                                   
                                   <span class="desc-text" id="sku">
                                   ' . $details['sku'] . '
                                   </span>
                              </div>

                              <div>
                                   <span class="desc-title">
                                        MPN:
                                   </span>

                                   <span class="desc-text">
                                   ' . $details['mpn'] . '
                                   </span>
                              </div>

                         </div>

                         <div class="vote-rate">
                              <span class="rate">0</span>
                              <i class="far fa-star"></i>
                              <i class="far fa-star"></i>
                              <i class="far fa-star"></i>
                              <i class="far fa-star"></i>
                              <i class="far fa-star"></i>

                              <!-- <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i> -->

                              <span>
                                   <a href="#" class="number-of-vote">0 Đánh giá</a>
                              </span>
                              <span>
                                   <a href="#" class="number-of-cmt">0 Bình luận</a>
                              </span>
                         </div>

                         <div class="producer-of-desc">
                              <span class="desc-title">
                                   Thương hiệu:
                              </span>

                              <span class="desc-text">
                                   ' . $details['producer_name'] . '
                              </span>
                         </div>

                         <!-- MÔ TẢ + BẢO HÀNH -->

                         <div class="desc-other">

                              <!-- MÔ TẢ SẢN PHẨM -->

                              <div class="main-desc">
                                   <li>
                                        <span class="desc-title">
                                             Vi xử lý:
                                        </span>
                                        <span class="desc-text">
                                             ' . $details['cpu'] . '
                                        </span>
                                   </li>

                                   <li>
                                        <span class="desc-title">
                                             Màn hình:
                                        </span>

                                        <span class="desc-text">
                                             ' . $details['display'] . '
                                        </span>
                                   </li>

                                   <li>
                                        <span class="desc-title">
                                             RAM:
                                        </span>

                                        <span class="desc-text">
                                             ' . $details['ram'] . '
                                        </span>
                                   </li>

                                   <li>
                                        <span class="desc-title">
                                             Card đồ họa:
                                        </span>

                                        <span class="desc-text">
                                             ' . $details['gpu'] . '
                                        </span>
                                   </li>

                                   <li>
                                        <span class="desc-title">
                                             Lưu trữ:
                                        </span>

                                        <span class="desc-text">
                                             ' . $details['disk'] . '
                                        </span>
                                   </li>

                                   <li>
                                        <span class="desc-title">
                                             Pin:
                                        </span>

                                        <span class="desc-text">
                                             ' . $details['pin'] . '
                                        </span>
                                   </li>

                                   <li>
                                        <span class="desc-title">
                                             Kết nối chính:
                                        </span>

                                        <span class="desc-text">
                                             ' . $details['connector'] . '
                                        </span>
                                   </li>

                                   <li>
                                        <span class="desc-title">
                                             Cân nặng:
                                        </span>

                                        <span class="desc-text">
                                             ' . $details['weight'] . '
                                        </span>
                                   </li>

                                   <li>
                                        <span class="desc-title">
                                             Hệ điều hành:
                                        </span>

                                        <span class="desc-text">
                                             ' . $details['os'] . '
                                        </span>
                                   </li>
                                   <li>
                                        <span class="desc-title">
                                             Màu máy:
                                        </span>

                                        <span class="desc-text">
                                             ' . $details['color'] . '
                                        </span>
                                   </li>
                                   </div>

                                   <!-- CHẾ ĐỘ BẢO HÀNH + OFFICE -->

                              </div>
                         </div>

                         <hr width="90%">

                         <!-- ƯU ĐÃI  -->

                         <div class="promotion">
                              <h3>Khuyến mãi</h3>

                              <i class="fas fa-gift desc-icon"></i>
                              <span class="desc-title">Ưu đãi khi mua kèm</span>

                              <br />

                              <div>
                                   <i class="fas fa-info-circle desc-icon"></i>
                                   <span>
                                        Giảm 20% , áp dụng tối đa 1 sản phẩm thuộc Phụ kiện giảm giá 20% mua kèm Laptop
                                   </span>
                              </div>

                         </div>

                         <hr width="90%">

                         
               </div>
          </div>';
}
