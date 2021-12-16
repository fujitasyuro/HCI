<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Đơn hàng</title>
     <link rel="stylesheet" href="../CSS/Stype.css">
     <script src="https://kit.fontawesome.com/c7202ffe49.js" crossorigin="anonymous"></script>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
     <link rel="shortcut icon" href="../Foods/Logo-footer.png" type="image/vnd.microsoft.icon">
     <link href="https://fonts.googleapis.com/css?family=Google+Sans:100,300,400,500,700,900,100i,300i,400i,500i,700i,900i" rel="stylesheet">
</head>

<body>

     <?php
     include("../Modules/top-nav.php");
     include("../Modules/tatcadonhang.php");
     include("../Modules/hoadon.php");
     // include("../Modules/footer.php");
     ?>

     <div id="overlay1"></div>

     <script src="../../JS/tabs-menu.js"></script>
     <script src="../../JS/checkcart.js"></script>
     <script>
          const openModalButtons1 = document.querySelectorAll('[data-modal-target1]')
          const overlay1 = document = document.getElementById('overlay1')

          openModalButtons1.forEach(button => {
               button.addEventListener('click', () => {
                    const receipt = document.querySelector(button.dataset.modalTarget1)
                    openModal(receipt)
               })
          })

          overlay1.addEventListener('click', () => {
               const modals1 = document.querySelectorAll('.receipt__container.active1')
               modals1.forEach(receipt => {
                    closeModal(receipt)
               })
          })

          function openModal(receipt) {
               if (receipt == null) return
               receipt.classList.add('active1')
               overlay1.classList.add('active1')
          }

          function closeModal(receipt) {
               if (receipt == null) return
               receipt.classList.remove('active1')
               overlay1.classList.remove('active1')
          }
     </script>
</body>

</html>