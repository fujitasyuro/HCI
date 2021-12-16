<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Đăng nhập</title>
     <link rel="stylesheet" href="../CSS/dangnhap.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
     <link rel="shortcut icon" href="../Foods/Logo-footer.png" type="image/vnd.microsoft.icon">
     <link href="https://fonts.googleapis.com/css?family=Google+Sans:100,300,400,500,700,900,100i,300i,400i,500i,700i,900i" rel="stylesheet">

</head>

<body class="BGG">
     <div class="form-dangnhap">
          <form action="xulydangnhap.php" method="POST">
               <img class="logo-img" src="../Foods/Logo.png">
               <p class="logo-name">BuyLAP</p>
               <div class="form">
                    <div class="tendangnhap">
                         <label for="tendangnhap">
                              <span>Tên đăng nhập:</span>
                              <input class="input" type="text" placeholder="Tên đăng nhập" name="tendangnhap" id="tendangnhap">
                         </label>
                    </div>
                    <div class="matkhau">
                         <label for="matkhau">
                              <span>Mật khẩu:</span>
                              <input class="input" type="password" placeholder="Mật khẩu" name="matkhau" id="matkhau">
                         </label>
                    </div>

                    <input type="submit" value="Đăng nhập" name="dangnhap" class="dangnhap">

                    <a class="quenmatkhau" href="">Quên mật khẩu?</a>
                    <div class="nhodangnhap">
                         <label for="nhodangnhap">
                              <input type="checkbox" name="nhodangnhap" id="nhodangnhap" value="Ghi nhớ">
                              <span>Nhớ đăng nhập</span>
                         </label>
                    </div>

                    <hr class="hr">

                    <div class="chuacotaikhoan">
                         <span>Bạn chưa có tài khoản?</span>
                         <a href="./dangky.php">Đăng ký ngay</a>
                    </div>
               </div>
          </form>
     </div>
</body>

</html>