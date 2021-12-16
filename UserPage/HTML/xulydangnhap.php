<?php
session_start();
require_once('../../DB/connect.php');

if (isset($_POST["dangnhap"]) && $_POST["tendangnhap"] != '' && $_POST["matkhau"] != '') {
     $username = $_POST["tendangnhap"];
     $pass = $_POST["matkhau"];
     $pass = md5($pass);

     $sql = "SELECT * FROM account WHERE username = '$username' AND pass = '$pass'";
     $user = mysqli_query($connect, $sql);

     if (mysqli_num_rows($user) > 0) {
          $_SESSION["user"] = $username;
          header("location: index.php");
     } else {
          echo ("Bạn đã nhập sai tên đăng nhập hoặc mật khẩu");
          header("location: dangnhap.php");
     }
} else {
     header("location: dangnhap.php");
}
