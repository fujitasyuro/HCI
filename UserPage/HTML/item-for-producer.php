<?php
require_once('../../DB/DBHelper.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>BuyLAP - Trang chủ</title>
     <link rel="stylesheet" href="../CSS/Stype.css">
     <script src="https://kit.fontawesome.com/c7202ffe49.js" crossorigin="anonymous"></script>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
     <link rel="shortcut icon" href="../Foods/Logo-footer.png" type="image/vnd.microsoft.icon">
     <link href="https://fonts.googleapis.com/css?family=Google+Sans:100,300,400,500,700,900,100i,300i,400i,500i,700i,900i" rel="stylesheet">


</head>

<body>
     <?php
     include("../modules/top-nav.php");
     include("../modules/brand-bar.php");
     ?>

     <div class="path">
          <Span class="logo-name logo-path">BuyLap / Dell</Span>
     </div>

     <main>
          <?php
          include("../modules/item-producer.php");
          include("../Modules/footer.php");
          ?>
     </main>

     <script src="../../JS/swap-view.js"></script>

     <?php
     if (!isset($_SESSION["user"])) {
     ?>

     <?php
     } else {
     ?>
          <script src="../../JS/checkcart.js"></script>
     <?php
     }
     ?>

</body>

</html>