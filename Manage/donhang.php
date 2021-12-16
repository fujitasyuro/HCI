<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Quản lý đơn hàng</title>
     <link rel="stylesheet" href="./css/app.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
     <script src="https://kit.fontawesome.com/c7202ffe49.js" crossorigin="anonymous"></script>
     <link rel="shortcut icon" href="../UserPage/Foods/Logo-footer.png" type="image/vnd.microsoft.icon">
     <link href="https://fonts.googleapis.com/css?family=Google+Sans:100,300,400,500,700,900,100i,300i,400i,500i,700i,900i" rel="stylesheet">
</head>

<body>
     <?php
     include("./Modules/top-nav.php")
     ?>

     <div class="searchdonhang">
          <form action="" class="search-box1">
               <input type="text" name="nsx-search" class="search" placeholder="Nhập tên sản phẩm, số hóa đơn muốn tìm">
               <label for="producer-search">
                    <i class="fas fa-search search-icon1"></i>
                    <input type="submit" name="producer-search" id="producer-search" style="display: none;">
               </label>
          </form>
     </div>

     <div class="menutabs">
          <div class="tab-item active-tab">
               <span>Chờ xử lý</span>
          </div>
          <div class="tab-item">
               <span>Đã xử lý</span>
          </div>
          <div class="tab-item">
               <span>Đã từ chối</span>
          </div>
          <div class="tab-item">
               <span>Đã giao</span>
          </div>
          <div class="line"></div>
     </div>

     <!-- CHO XU LY -->

     <table class="thongtingiohang active-content">
          <thead>
               <tr>
                    <th class="title">
                         <div class="w350px">
                              Sản phẩm
                         </div>
                    </th>
                    <th class="title">
                         <div class="w350px">
                              Trạng thái
                         </div>
                    </th>
                    <th class="title">
                         <div class="w350px">
                              Chỉnh sửa
                         </div>
                    </th>
               </tr>
          </thead>

          <tbody>
               <tr>
                    <td class="product-table">
                         <div class="w350px">
                              <div class="pro-name-box">
                                   <img src="../UserPage/Foods/office-laptop-4.png" class="img-donhang">
                                   <span class="title-sp-giohang">
                                        Razer Book 13
                                   </span>
                              </div>
                         </div>
                    </td>

                    <td class="product-table">
                         <div class="w350px">
                              <span class="choxuly"> Chờ xử lý </span>
                         </div>
                    </td>
                    <td class="product-table">
                         <div class="w350px">
                              <label for="xemchitiet">
                                   <button class="editbtn" title="Xem chi tiết" id="open-modal" class="modal__button" data-modal-target="#modal">
                                        <i class="fas fa-eye"></i>
                                   </button>
                                   <input type="submit" id="xemchitiet" name="xemchitiet" style="display: none;">
                              </label>

                              <label for="duyetdonhang">
                                   <button class="editbtn" title="Duyệt đơn hàng">
                                        <i class="fas fa-check"></i>
                                   </button>
                                   <input type="submit" id="duyetdonhang" name="duyetdonhang" style="display: none;">
                              </label>

                              <label for="tuchoidonhang">
                                   <button class="editbtn" title="Từ chối đơn hàng">
                                        <i class="fas fa-times"></i>
                                   </button>
                                   <input type="submit" id="tuchoidonhang" name="tuchoidonhang" style="display: none;">
                              </label>
                         </div>
                    </td>
               </tr>
          </tbody>
     </table>

     <!-- DA XU LY -->

     <table class="thongtingiohang">
          <thead>
               <tr>
                    <th class="title">
                         <div class="w350px">
                              Sản phẩm
                         </div>
                    </th>
                    <th class="title">
                         <div class="w350px">
                              Ngày xử lý
                         </div>
                    </th>
                    <th class="title">
                         <div class="w350px">
                              Xử lý
                         </div>
                    </th>
               </tr>
          </thead>

          <tbody>
               <tr>
                    <td class="product-table">
                         <div class="w350px">
                              <div class="pro-name-box">
                                   <img src="../UserPage/Foods/office-laptop-5.png" class="img-donhang">
                                   <span class="title-sp-giohang">
                                        Apple Macbook Air (M1, Late 2020 - Apple Silicon)
                                   </span>
                              </div>
                         </div>
                    </td>

                    <td class="product-table">
                         <div class="w350px">
                              <span class="thoigian"> 10/12/2021 </span>
                         </div>
                    </td>
                    <td class="product-table">
                         <div class="w350px">
                              <button class="editbtn" title="Xem hóa đơn" class="modal__button" data-modal-target1="#receipt-modal">
                                   <i class="fas fa-receipt"></i>
                              </button>

                              <label for="xemchitietdonhang">
                                   <button class="editbtn" title="Xem chi tiết" class="modal__button" data-modal-target="#modal">
                                        <i class="fas fa-eye"></i>
                                   </button>
                                   <input type="submit" id="xemchitietdonhang" name="xemchitietdonhang" style="display: none;">
                              </label>

                              <label for="duyetdonhang">
                                   <button class="editbtn" title="Gọi Shipper">
                                        <i class="fas fa-phone-alt"></i>
                                   </button>
                                   <input type="submit" id="duyetdonhang" name="duyetdonhang" style="display: none;">
                              </label>

                              <label for="tuchoidonhang">
                                   <button class="editbtn" title="Huỷ đơn hàng">
                                        <i class="fas fa-times"></i>
                                   </button>
                                   <input type="submit" id="tuchoidonhang" name="tuchoidonhang" style="display: none;">
                              </label>
                         </div>
                    </td>
               </tr>
          </tbody>
     </table>

     <!-- DA TU CHOI -->

     <table class="thongtingiohang">
          <thead>
               <tr>
                    <th class="title">
                         <div class="w350px">
                              Sản phẩm
                         </div>
                    </th>
                    <th class="title">
                         <div class="w350px">
                              Ngày từ chối
                         </div>
                    </th>
                    <th class="title">
                         <div class="w350px">
                              Xem chi tiết
                         </div>
                    </th>
               </tr>
          </thead>

          <tbody>
               <tr>
                    <td class="product-table">
                         <div class="w350px">
                              <div class="pro-name-box">
                                   <img src="../UserPage/Foods/gaming-laptop-2.png" class="img-donhang">
                                   <span class="title-sp-giohang">
                                        Razer Blade 15 Base Edition
                                   </span>
                              </div>
                         </div>
                    </td>

                    <td class="product-table">
                         <div class="w350px">
                              <span class="tuchoi"> 15/11/2021 </span>
                         </div>
                    </td>
                    <td class="product-table">
                         <label for="xem">
                              <button class="editbtn" title="Xem chi tiết" class="modal__button" data-modal-target="#modal">
                                   <i class="fas fa-eye"></i>
                              </button>
                              <input type="submit" id="xem" name="xem" style="display: none;">
                         </label>
                    </td>
               </tr>
          </tbody>
     </table>

     <!-- DA GIAO -->

     <table class="thongtingiohang">
          <thead>
               <tr>
                    <th class="title">
                         <div class="w350px">
                              Sản phẩm
                         </div>
                    </th>
                    <th class="title">
                         <div class="w350px">
                              Ngày nhận hàng
                         </div>
                    </th>
                    <th class="title">
                         <div class="w350px">
                              Xem chi tiết
                         </div>
                    </th>
               </tr>
          </thead>

          <tbody>
               <tr>
                    <td class="product-table">
                         <div class="w350px">
                              <div class="pro-name-box">
                                   <img src="../UserPage/Foods/macbook-pro-14-inch-large-2x.jpg" class="img-donhang">
                                   <span class="title-sp-giohang">
                                        Apple Macbook Pro 14 (Apple M1)
                                   </span>
                              </div>
                         </div>
                    </td>

                    <td class="product-table">
                         <div class="w350px">
                              <span class="giaohangthanhcong"> 15/11/2021 </span>
                         </div>
                    </td>
                    <td class="product-table">
                         <button class="editbtn" title="Xem hóa đơn" class="modal__button" data-modal-target1="#receipt-modal">
                              <i class="fas fa-receipt"></i>
                         </button>
                    </td>
               </tr>
          </tbody>
     </table>

     <?php
     include("./Modules/chitietdonhang.php");
     include("./Modules/hoadon.php");
     ?>

     <div id="overlay"></div>
     <div id="overlay1"></div>

     <script src="../JS/tabs-menu.js"></script>
     <script src="../JS/popup-modal.js"></script>

     <script>
          const openModalButtons1 = document.querySelectorAll('[data-modal-target1]')
          const overlay1 = document = document.getElementById('overlay1')

          openModalButtons1.forEach(button => {
               button.addEventListener('click', () => {
                    const receipt = document.querySelector(button.dataset.modalTarget1)
                    const receipt__button = document.getElementById('receipt__button')
                    openModal(receipt, receipt__button)
               })
          })

          overlay1.addEventListener('click', () => {
               const modals1 = document.querySelectorAll('.receipt__container.active1')
               modals1.forEach(receipt => {
                    closeModal(receipt)
               })
          })

          function openModal(receipt, receipt__button) {
               if (receipt == null) return
               receipt__button.classList.add('active')
               receipt.classList.add('active1')
               overlay1.classList.add('active1')
          }

          function closeModal(receipt) {
               if (receipt == null) return
               receipt__button.classList.remove('active')
               receipt.classList.remove('active1')
               overlay1.classList.remove('active1')
          }
     </script>

</body>

</html>