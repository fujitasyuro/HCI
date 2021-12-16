<div class="title-w">
     <h1>
          Mô tả chi tiết
     </h1>
</div>

<?php
$sql_details = "SELECT * FROM products WHERE products.product_id='$_GET[id]' ORDER BY product_id DESC";
$query_details = executeResult($sql_details);

foreach ($query_details as $details) {
     echo '
          <div class="main-desc">
               ' . $details['decs'] . '
          </div>';
}
