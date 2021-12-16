<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Thống kê</title>
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

     <div class="chonthoigian">
          <select name="thoigian" id="thoigian">
               <option value="thanggannhat" selected>Tháng gần nhất</option>
               <option value="namgannhat">Năm gần nhất</option>
               <option value="toanthoigian">Toàn thời gian</option>
          </select>
     </div>

     <div class="thongke">
          <div class="luottruycap thongke-box">
               <div class="thongke-title">
                    <span>Lượt truy cập vào Shop</span>
               </div>

               <div>
                    <span class="thongke-content">26 Lượt</span>
               </div>
          </div>

          <div class="sodondathang thongke-box">
               <div class="thongke-title">
                    <span>Số đơn đã được đặt</span>
               </div>

               <div>
                    <span class="thongke-content">3 đơn</span>
               </div>
          </div>

          <div class="sodondaduyet thongke-box">
               <div class="thongke-title">
                    <span>Số đơn đã được duyệt</span>
               </div>

               <div>
                    <span class="thongke-content">2 đơn</span>
               </div>
          </div>

          <div class="sodondagiao thongke-box">
               <div class="thongke-title">
                    <span>Số đơn đã giao</span>
               </div>

               <div>
                    <span class="thongke-content">1 đơn</span>
               </div>
          </div>

          <div class="doanhthu thongke-box">
               <div class="thongke-title">
                    <span>Doanh thu</span>
               </div>

               <div>
                    <span class="thongke-content">129.98 Triệu</span>
               </div>
          </div>
     </div>

     <?php
     include("./Modules/bangthongke.php")
     ?>

     <div id="overlay"></div>


     <div class="thaotacthongke">
          <button class="thongkebtn" id="open-modal" data-modal-target="#modal">
               <i class="fas fa-print"></i>
          </button>
          <button class="thongkebtn">
               <i class="fas fa-file-download"></i>
          </button>
     </div>

     <script src="../JS/popup-modal.js"></script>

</body>

</html>