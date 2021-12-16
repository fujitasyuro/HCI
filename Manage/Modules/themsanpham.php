<div id="modal" class="modal__container">
     <form action="" class="modal__content" method="POST" enctype="multipart/form-data">
          <div class="themsanpham-box">
               <button data-close-button class="close-button">
                    &times;
               </button>
               <div class="choose-nsx mini-box">
                    <label for="nsx-chosse">
                         <span>Chọn / Thêm NSX:</span>
                         <select id="nsx-chosse" class="input-text" name="nsx" onchange="FetchNSX(this.value)">
                              <option value disabled selected>-----Chọn NSX-----</option>

                              <?php
                              $sql_nsx = mysqli_query($connect, 'SELECT producer_id, producer_name FROM producer ORDER BY producer_id ASC')
                              ?>
                              <?php
                              while ($row_nsx = mysqli_fetch_array($sql_nsx)) {
                              ?>
                                   <option value="<?php echo $row_nsx['producer_id'] ?>"><?php echo $row_nsx['producer_name'] ?></option>
                              <?php
                              }
                              ?>

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
                              <option value disabled selected>-----Chọn thương hiệu nhánh-----</option>
                         </select>
                    </label>
                    <a href="./nsx.html" class="add-btn">
                         <span>+</span>
                    </a>
               </div>

               <div class="choose-type mini-box">
                    <label for="type">
                         <?php
                         $sql_ctg = mysqli_query($connect, 'SELECT * FROM laptop_type ORDER BY laptop_type_id DESC');
                         ?>
                         <span>Chọn / Thêm loại Laptop:</span>
                         <select id="type" class="input-text" name="typelaptop">
                              <option value="0">-----Chọn loại Laptop-----</option>

                              <?php
                              while ($row_danhmuc = mysqli_fetch_array($sql_ctg)) {
                              ?>
                                   <option value="<?php echo $row_danhmuc['laptop_type_id'] ?>"><?php echo $row_danhmuc['laptop_type_name'] ?></option>
                              <?php
                              }
                              ?>
                         </select>
                    </label>
                    <button class="add-btn" id="open-mini-modal" data-modal-target="#modal">
                         <span>+</span>
                    </button>
               </div>

               <div class="name-laptop mini-box">
                    <label for="name">
                         <span>Tên Laptop:</span>
                         <input type="text" id="name" class="input-text" placeholder="Nhập tên laptop" name="tensanpham">
                    </label>
               </div>

               <div class="img-laptop mini-box">
                    <label for="file">
                         <span>Ảnh Laptop:</span>
                         <div class="upload-box">
                              <input type="file" id="file" hidden name="anhlaptop">
                              <label for="file" class="upload" id="selector">Chọn hình ảnh</label>
                              <script src="../JS/upload.js"></script>
                         </div>
                    </label>
               </div>

               <div class="mpn mini-box">
                    <label for="mpn">
                         <span>MPN:</span>
                         <input type="text" name="mpn" id="mpn" class="input-text" placeholder="Nhập MPN">
                    </label>
               </div>
               <div class="sku mini-box">
                    <label for="sku">
                         <span>SKU:</span>
                         <input type="text" name="sku" id="sku" class="input-text" placeholder="Nhập SKU">
                    </label>
               </div>
               <div class="cpu mini-box">
                    <label for="cpu">
                         <span>CPU:</span>
                         <input type="text" name="cpu" id="cpu" class="input-text" placeholder="Nhập CPU">
                    </label>
               </div>

               <div class="gpu mini-box">
                    <label for="gpu">
                         <span>GPU:</span>
                         <input type="text" name="gpu" id="gpu" class="input-text" placeholder="Nhập GPU">
                    </label>
               </div>

               <div class="ram mini-box">
                    <label for="ram">
                         <span>RAM:</span>
                         <input type="text" name="ram" id="ram" class="input-text" placeholder="Nhập RAM">
                    </label>
               </div>

               <div class="disk mini-box">
                    <label for="disk">
                         <span>Lưu trữ:</span>
                         <input type="text" name="disk" id="disk" class="input-text" placeholder="Nhập dung lượng lưu trữ">
                    </label>
               </div>

               <div class="display mini-box">
                    <label for="display">
                         <span>Màn hình:</span>
                         <input type="text" name="display" id="display" class="input-text" placeholder="Nhập kích thước và độ phân giải màn hình">
                    </label>
               </div>

               <div class="dis-color mini-box">
                    <label for="dis-color">
                         <span>Độ bao phủ màu:</span>
                         <input type="text" name="dis-color" id="dis-color" class="input-text" placeholder="Nhập độ bao phủ màu của màn hình">
                    </label>
               </div>

               <div class="pin mini-box">
                    <label for="pin">
                         <span>Pin:</span>
                         <input type="text" name="pin" id="pin" class="input-text" placeholder="Nhập dung lượng pin của thiết bị">
                    </label>
               </div>

               <div class="connecter mini-box">
                    <label for="connector">
                         <span>Cổng kết nối:</span>
                         <input type="text" name="connector" id="connector" class="input-text" placeholder="Nhập các cổng kết nối">
                    </label>
               </div>

               <div class="weight mini-box">
                    <label for="weight">
                         <span>Cân nặng:</span>
                         <input type="text" name="weight" id="weight" class="input-text" placeholder="Nhập cân nặng của thiết bị">
                    </label>
               </div>

               <div class="os mini-box">
                    <label for="os">
                         <span>Hệ điều hành:</span>
                         <input type="text" name="os" id="os" class="input-text" placeholder="Nhập hệ điều hành của thiết bị">
                    </label>
               </div>

               <div class="color mini-box">
                    <label for="color">
                         <span>Màu máy:</span>
                         <input type="text" name="color" id="color" class="input-text" placeholder="Nhập màu máy">
                    </label>
               </div>

               <div class="price mini-box">
                    <label for="price">
                         <span>Giá máy:</span>
                         <input type="text" name="price" id="price" class="input-text" placeholder="Nhập giá máy">
                    </label>
               </div>

               <div class="sale mini-box">
                    <label for="sale">
                         <span>Giá khuyến mãi:</span>
                         <input type="text" name="sale" id="sale" class="input-text" placeholder="Nhập khuyến mãi">
                    </label>
               </div>

               <div class="baohanh mini-box">
                    <label for="baohanh">
                         <span class="baohanh-title">Chế độ bảo hành:</span>
                         <textarea name="baohanh" id="baohanh" cols="62" rows="5" class="textbox"></textarea>
                    </label>
               </div>

               <div class="khuyenmai mini-box">
                    <label for="khuyenmai">
                         <span class="baohanh-title">Khuyến mãi:</span>
                         <textarea name="khuyenmai" id="khuyenmai" cols="62" rows="5" class="textbox"></textarea>
                    </label>
               </div>

               <div class="the-number mini-box">
                    <label for="the-number">
                         <span>Số lượng máy:</span>
                         <input type="text" name="the-number" id="the-number" class="input-text" placeholder="Nhập số lượng máy">
                    </label>
               </div>

               <div class="mota ">
                    <label for="mota">
                         <span class="mota-title">Mô tả:</span>
                         <textarea name="decs" id="mota" cols="62" rows="5" class="textbox"></textarea>
                    </label>
               </div>

               <div class="btn-box">
                    <input type="submit" value="Thêm" class="btn" name="themsanpham">
                    <input type="reset" class="btn">
               </div>
          </div>
     </form>
</div>