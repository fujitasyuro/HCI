<?php
require_once('../DB/connect.php');
require_once('../DB/DBHelper.php');
?>

<?php
if (isset($_POST['themnsx'])) {
     $producer_name = $_POST['producer_name'];

     $sql_insert_product = mysqli_query($connect, "INSERT INTO producer(producer_name) values ('$producer_name')");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Quản lý NSX</title>
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

     <main>
          <h1>QUẢN LÝ NSX</h1>
          <div class="add-nsx-box">
               <div class="addnsx-btn">
                    <button class="btn-cust tab-active">
                         Thêm NSX
                    </button>

                    <button class="btn-cust">
                         Thêm thương hiệu nhánh
                    </button>
               </div>
               <form class="view_wrap add-nsx choose-active" method="POST">
                    <div class="name-nsx">
                         <label for="producer_name">
                              <input type="text" placeholder="Nhập tên nhà sản xuất" class="input" name="producer_name" id="producer_name" required>
                         </label>
                    </div>
                    <input type="submit" value="Thêm" class="add-nsx-button" name="themnsx">
               </form>

               <form action="#" class="view_wrap add-sub-brand-frm">
                    <div class="name-nsx add-sub-box">
                         <label for="nsx-chosse">
                              <select id="nsx-chosse" class="nsxchose" name="nsx" onchange="FetchNSX(this.value)">
                                   <option value disabled selected>-----Chọn NSX-----</option>

                                   <?php
                                   $sql_nsx = mysqli_query($connect, 'SELECT producer_id, producer_name FROM producer ORDER BY producer_id DESC')
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
                         <label for="producer_name">
                              <input type="text" placeholder="Nhập tên thương hiệu nhánh" class="input input-sub-brand" name="producer_name" id="producer_name" required>
                         </label>
                    </div>
                    <input type="submit" value="Thêm" class="add-nsx-button" name="themthuonghieunhanh">
               </form>
          </div>

          <div>
               <form action="" class="search-box1">
                    <input type="text" name="nsx-search" class="search" placeholder="Nhập tên nhà sản xuất muốn tìm">
                    <label for="producer-search">
                         <i class="fas fa-search search-icon"></i>
                         <input type="submit" name="producer-search" id="producer-search" style="display: none;">
                    </label>
               </form>
          </div>

          <table>
               <tr>
                    <th>NSX</th>
                    <th>Số thương hiệu nhánh</th>
                    <th>Số sản phẩm</th>
                    <th>Edit</th>
               </tr>

               <?php
               $sql_product = "SELECT producer.producer_name, COUNT(products.producer_id) as sosanpham FROM producer, products WHERE products.producer_id = producer.producer_id GROUP BY producer.producer_id";

               $row_product = executeResult($sql_product);

               foreach ($row_product as $product) {
                    echo '
                         <tr>
                              <td>
                                   <span class="nsx-data">
                                        ' . $product['producer_name'] . '
                                   </span>
                              </td>
                              <td>
                                   <span class="nsx-data">
                                   
                                   </span>
                              </td>
     
                              <td>
                                   <span class="nsx-data">
                                        ' . $product['sosanpham'] . '
                                   </span>
                              </td>
                              <td>
                              <button class="editbtn" title="Xem chi tiết" class="modal__button" data-modal-target="#modal">
                                   <i class="fas fa-eye"></i>
                              </button> 
                                   <button><i class="fas fa-pen"></i></button>
                                   <button><i class="far fa-trash-alt"></i></button>
                              </td>
                         </tr>';
               }
               ?>
          </table>

          <?php
          include("./Modules/chitietnsx.php")
          ?>

          <div id="overlay"></div>

     </main>

     <script>
          const $ = document.querySelector.bind(document)
          const $$ = document.querySelectorAll.bind(document)

          const tabs = $$('.btn-cust')
          const panels = $$('.view_wrap')

          tabs.forEach((tab, index) => {
               const panel = panels[index]

               tab.onclick = function() {
                    $('.btn-cust.tab-active').classList.remove('tab-active')
                    $('.view_wrap.choose-active').classList.remove('choose-active')

                    this.classList.add('tab-active')
                    panel.classList.add('choose-active')
               }
          })
     </script>

     <script src="../JS/popup-modal.js"></script>

</body>