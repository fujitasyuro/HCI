<?php
require_once('../../DB/DBHelper.php');
require_once('../../DB/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Product - Item</title>
     <link rel="stylesheet" href="../CSS/Stype.css">
     <script src="https://kit.fontawesome.com/c7202ffe49.js" crossorigin="anonymous"></script>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Google+Sans:100,300,400,500,700,900,100i,300i,400i,500i,700i,900i" rel="stylesheet">
     <link rel="shortcut icon" href="../Foods/Logo-footer.png" type="image/vnd.microsoft.icon">


</head>

<body>
     <?php
     include("../modules/top-nav.php");
     include("../modules/brand-bar.php");
     include("../modules/path.php");
     include("../modules/item-container.php");
     include("../Modules/desc.php");
     include("../modules/buy-box.php");
     include("../modules/cmt.php");
     include("../modules/footer.php");
     ?>

     <?php
     if (!isset($_SESSION["user"])) {
     ?>

     <?php
     } else {
     ?>
          <script src="../../JS/add-cart.js"></script>
     <?php
     }
     ?>
</body>

</html>