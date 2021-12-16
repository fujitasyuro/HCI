<?php
include_once 'config-ajax.php';

if (isset($_POST['producer_id'])) {
     $query = "SELECT * FROM sub_brand where producer_id=" . $_POST['producer_id'];
     $result = $db->query($query);
     if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
               echo '<option value=' . $row['sub_brand_id'] . '>' . $row['sub_brand_name'] . '</option>';
          }
     }
}
