<?php
      $path_db = '../admin/models/BaseModel.php';
      include $path_db;
      error_reporting( error_reporting() & ~E_NOTICE );
      date_default_timezone_set('Asia/Bangkok');  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>select by.devtai.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
  
<?php
    $sql_type = "SELECT * FROM tb_product_type";
    $query = mysqli_query($connection, $sql_type);
?>

<div class="container">
  <h2>Form control: select by.devtai.com</h2>
  <p>code เลือกประเภท  php + mysqli + ajax + jquery + bootstrap :</p>
  <form>
    <div class="form-group">
      <label for="sel1">ประเภท:</label>
      <select class="form-control" name="Ref_id_type" id="product_type">
            <option value="" selected disabled>-กรุณาเลือกประเภท-</option>
             <?php foreach ($query as $value) { ?>
            <option value="<?=$value['product_type_id']?>"><?=$value['product_type_name']?></option>
            <?php } ?>
      </select>
      <br>

      <label for="sel1">ชนิค:</label>
      <select class="form-control" name="Ref_line_up" id="product_line_up">
      </select>
      <br>
  </form>
</div>
</body>
</html>
<?php include('script.php');?>
