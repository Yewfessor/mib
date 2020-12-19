<?php
$path_db = '../models/BaseModel.php';
include $path_db;
error_reporting( error_reporting() & ~E_NOTICE );
date_default_timezone_set('Asia/Bangkok');
  if (isset($_POST['function']) && $_POST['function'] == 'product_type') {
  	$id = $_POST['product_type_id'];
  	$sql = "SELECT * FROM tb_product_line_up WHERE product_type_id='$id'";
    $query = mysqli_query($connection, $sql);
  	echo '<option value="" selected disabled>-กรุณาเลือกชนิด-</option>';
  	foreach ($query as $value) {
  		echo '<option value="'.$value['product_line_up_id'].'">'.$value['product_line_up_name'].'</option>';
    }
  }
