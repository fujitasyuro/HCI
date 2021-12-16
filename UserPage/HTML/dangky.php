<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Đăng ký</title>
     <link rel="stylesheet" href="../CSS/dangky.css">
     <link rel="shortcut icon" href="../Foods/Logo-footer.png" type="image/vnd.microsoft.icon">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Google+Sans:100,300,400,500,700,900,100i,300i,400i,500i,700i,900i" rel="stylesheet">

</head>

<body>

     <div class="form-dangky">
          <form action="xulydangky.php" method="POST">
               <img class="logo-img" src="../Foods/Logo.png">
               <p class="logo-name">BuyLAP</p>
               <div class="form">
                    <div class="tendangnhap input-box">
                         <label for="tendangnhap input-box">
                              <span>
                                   Tên đăng nhập:
                              </span>
                              <input type="text" placeholder="Nhập tên đăng nhập" name="tendangnhap" id="tendangnhap" required class="input">
                         </label>
                    </div>
                    <div class="email input-box">
                         <label for="email">
                              <span>
                                   Email (Tùy chọn):
                              </span>
                              <input type="email" placeholder="Nhập email" name="email" id="email" class="input">
                         </label>
                    </div>
                    <div class="matkhau input-box">
                         <label for="matkhau">
                              <span>
                                   Mật khẩu:
                              </span>
                              <input type="password" placeholder="Nhập mật khẩu" name="matkhau" id="matkhau" required class="input">
                         </label>
                    </div>
                    <div class="re-matkhau input-box">
                         <label for="re-matkhau">
                              <span>
                                   Mật khẩu:
                              </span>
                              <input type="password" placeholder="Nhập lại mật khẩu" name="re-matkhau" id="re-matkhau" required class="input">
                         </label>
                    </div>

                    <input type="submit" value="Đăng ký" name="dangky" class="dangky">

                    <hr class="hr">

                    <div class="dacotaikhoan">
                         <span>Bạn đã có tài khoản?</span>
                         <a href="./dangnhap.php">Đăng nhập ngay</a>
                    </div>

               </div>
          </form>
     </div>

</body>

</html>