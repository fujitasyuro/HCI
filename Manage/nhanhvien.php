<?php
require_once('../DB/connect.php');
?>

<?php
if (isset($_POST['themnhanvien'])) {
     $name = $_POST['tennhanvien'];
     $birthday = $_POST['ngaysinh'];
     $cmnd = $_POST['cmnd'];
     $home_town = $_POST['quequan'];
     $date_start_work = $_POST['ngaytuyen'];
     $work = $_POST['work'];

     $sql_insert_product = mysqli_query($connect, "INSERT INTO staff_info(name, birthday, cmnd, home_town, date_start_work, work_id) values ('$name', '$birthday', '$cmnd', '$home_town', '$date_start_work', '$work')");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Quản lý nhân viên</title>
     <link rel="stylesheet" href="./css/app.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
     <script src="https://kit.fontawesome.com/c7202ffe49.js" crossorigin="anonymous"></script>
     <link rel="shortcut icon" href="../UserPage/Foods/Logo-footer.png" type="image/vnd.microsoft.icon">
     <link href="https://fonts.googleapis.com/css?family=Google+Sans:100,300,400,500,700,900,100i,300i,400i,500i,700i,900i" rel="stylesheet">

</head>

<body>
     <header>
          <?php
          include("./Modules/top-nav.php")
          ?>
     </header>

     <h1>QUẢN LÝ NHÂN VIÊN</h1>

     <button id="open-modal" class="modal__button" data-modal-target="#modal">
          <i class="fas fa-plus add-laptop-btn"></i>
     </button>

     <div id="modal" class="modal__container">
          <form action="" class="modal__content" method="POST" enctype="multipart/form-data">
               <div class="themnhanvien-box">
                    <div class="tennhanvien mini-box">
                         <label for="tennhanvien">
                              <span>Tên nhân viên:</span>
                              <input type="text" name="tennhanvien" id="tennhanvien" class="input-text" placeholder="Nhập tên nhân viên" required>
                         </label>
                    </div>

                    <div class="ngaysinh mini-box">
                         <label for="ngaysinh">
                              <span>Ngày sinh:</span>
                              <input type="date" name="ngaysinh" id="ngaysinh" class="input-text" placeholder="Nhập ngày sinh nhân viên" required>
                         </label>
                    </div>

                    <div class="cmnd mini-box">
                         <label for="cmnd">
                              <span>CMND/CCCD:</span>
                              <input type="text" name="cmnd" id="cmnd" class="input-text" placeholder="Nhập CMND/CCCD" required>
                         </label>
                    </div>

                    <div class="quequan mini-box">
                         <label for="quequan">
                              <span>Quê quán:</span>
                              <input type="text" name="quequan" id="quequan" class="input-text" placeholder="Nhập quê quán" required>
                         </label>
                    </div>

                    <div class="vitrilamviec mini-box">
                         <label for="vitrilamviec">
                              <span>Vị trí làm việc:</span>
                              <select id="vitrilamviec" class="input-text" required name="work">
                                   <option value disabled selected>-----Chọn Công Việc-----</option>

                                   <?php
                                   $sql_work = mysqli_query($connect, 'SELECT work_id, work_name FROM works ORDER BY work_id ASC')
                                   ?>
                                   <?php
                                   while ($row_work = mysqli_fetch_array($sql_work)) {
                                   ?>
                                        <option value="<?php echo $row_work['work_id'] ?>"><?php echo $row_work['work_name'] ?></option>
                                   <?php
                                   }
                                   ?>
                              </select>
                         </label>

                         <a href="./nsx.php" class="add-btn">
                              <span>+</span>
                         </a>
                    </div>

                    <div class="ngaytuyen mini-box">
                         <label for="ngaytuyen">
                              <span>Ngày tuyển:</span>
                              <input type="date" name="ngaytuyen" id="ngaytuyen" class="input-text" autocomplete="on" required>
                         </label>
                    </div>

                    <div class="btn-box">
                         <input type="submit" value="Thêm" class="btn" name="themnhanvien">
                         <input type="reset" class="btn">
                    </div>
               </div>
          </form>
     </div>

     <div id="overlay"></div>

     <div>
          <form action="" class="search-box">
               <input type="text" name="laptop-search" class="search" placeholder="Nhập tên nhân viên muốn tìm">
               <label for="product-search">
                    <i class="fas fa-search search-icon"></i>
                    <input type="submit" name="product-search" id="product-search" style="display: none;">
               </label>
          </form>
     </div>

     <div class="product-list">
          <table>
               <thead>
                    <tr>
                         <th class="title">
                              <div class="w300px">
                                   Tên nhân viên
                              </div>
                         </th>
                         <th class="title">
                              <div class="w150px">
                                   ID nhân viên
                              </div>
                         </th>
                         <th class="title">
                              <div class="w150px">
                                   Ngày sinh
                              </div>
                         </th>
                         <th class="title">
                              <div class="w300px">
                                   CMND/CCCD
                              </div>
                         </th>
                         <th class="title">
                              <div class="w300px">
                                   Quê quán
                              </div>
                         </th>
                         <th class="title">
                              <div class="w200px">
                                   Vị trí làm việc
                              </div>
                         </th>
                         <th class="title">
                              <div class="w200px">
                                   Ngày vào làm
                              </div>
                         </th>
                         <th class="title">
                              <div class="w200px">
                                   Edit
                              </div>
                         </th>
                    </tr>
               </thead>

               <tbody>
                    <?php
                    require_once('../DB/DBHelper.php')
                    ?>

                    <?php
                    $sql_staffList = "SELECT staff_info.*, works.work_name FROM staff_info, works WHERE staff_info.work_id = works.work_id ORDER BY staff_id DESC";
                    $row_staffList = executeResult($sql_staffList);

                    foreach ($row_staffList as $staffList) {
                         echo '
                              <tr>
                                   <td class="product-table">
                                        <div class="w300px">
                                             ' . $staffList['name'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w150px">
                                             ' . $staffList['staff_id'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w150px">
                                             ' . $staffList['birthday'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w300px">
                                             ' . $staffList['cmnd'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w300px">
                                             ' . $staffList['home_town'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w200px">
                                             ' . $staffList['work_name'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w200px">
                                             ' . $staffList['date_start_work'] . '
                                        </div>
                                   </td>
                                   <td class="product-table">
                                        <div class="w200px">
                                             <a href="#" class="editbtn"><i class="fas fa-pen"></i></a>
                                             <a href="#" class="editbtn"><i class="far fa-trash-alt"></i></a>
                                        </div>
                                   </td>
                              </tr>';
                    }
                    ?>
               </tbody>
          </table>
     </div>

     <script src="../JS/popup-modal.js"></script>
</body>

</html>