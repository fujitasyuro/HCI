<?php
require_once('../../DB/connect.php');

if (isset($_POST["dangky"]) && $_POST["tendangnhap"] != '' && $_POST["matkhau"] != '' && $_POST["re-matkhau"]) {
     $username = $_POST["tendangnhap"];
     $email = $_POST["email"];
     $pass = $_POST["matkhau"];
     $re_pass = $_POST["re-matkhau"];
     $role = 2;

     // $message1 = 'Bạn vừa nhập lại mật khẩu không đúng vui lòng đăng ký lại';

     if ($pass != $re_pass) {
          header("location: dangky.php");
          // echo "<script type='text/javascript'>alert('$message1');</script>";
     }

     $sql = "SELECT * FROM account WHERE username = '$username'";
     $old = mysqli_query($connect, $sql);
     $pass = md5($pass);

     // $message = 'Tài khoản đã tồn tại';

     if (mysqli_num_rows($old) > 0) {
          header("location: dangky.php");
          // echo "<script type='text/javascript'>alert('$message');</script>";
     };

     $sql = "INSERT INTO account (username, email, pass, role) VALUE ('$username', '$email', '$pass', '$role')";
     mysqli_query($connect, $sql);
     header("location: dangnhap.php");
} else {
     header("location: dangky.php");
}
