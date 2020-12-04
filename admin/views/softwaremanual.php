<?php
//get
$software_id = $_GET['software_id'];

//path
$path_basemodel         = "../models/BaseModel.php";
$path_software_manual   = "../models/softwaremodel/manualupload.php";
$path_software          = "../../assets/software/";
$path_manual            = "../../assets/manual/";

//sql
include $path_basemodel;
$sql = "SELECT * FROM tb_software
        LEFT JOIN tb_software_type
        ON tb_software.software_type_id = tb_software_type.software_type_id
        LEFT JOIN tb_product_type
        ON tb_software.product_type_id = tb_product_type.product_type_id
        WHERE software_id='" . $software_id . "'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

//row
$software_id = $row['software_id'];
$software_name = $row['software_name'];
$software_type_id = $row['software_type_id'];
$software_type_name = $row['software_type_name'];
$product_type_id = $row["product_type_id"];
$product_type_name = $row["product_type_name"];
$software_file = $row["software_file"];



?>


<!--Upload Detail Product-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!--bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--bootstrap -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- ckeditor-->
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <!-- jquery-->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<div class="col-xs-12 col-sm-12 col-md-12" id="software">

    <div class="thumbnail">
        <div class="" align="center">
            <h3>อัพโหลด คู่มือ</h3>
        </div>
        <form class="form-horizontal" action="<?php echo $path_software_manual; ?>" method="post" enctype="multipart/form-data" name="upload_manual">
            <div class="form-group">
                <div class="col-sm-2" align="right">
                <input type="text" name="softwareid" id="softwareid" value="<?php echo $software_id; ?>" hidden>
                </div>
                <div class="col-sm-8" align="left">
                    ชื่อไฟล์
                    <input class="form-control" type="text" name="software_name" id="software_name" value="<?php echo $software_name; ?>" disabled>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-8" align="left">
                    ประเภทไฟล์
                    <select class="form-control" name="software_type_id" id="software_type_id" disabled>
                        <option center value="<?php echo $software_type_id; ?>"><?php echo $software_type_name; ?></option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-8" align="left">
                    หมวดหมู่
                    <select class="form-control" name="product_type_id" id="product_type_id" disabled>
                        <option center value="<?php echo $product_type_id; ?>"><?php echo $product_type_name; ?></option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-7" align="left">
                    ไฟล์ประกอบ<br>
                    <a href="<?php echo $path_software . $row["software_file"]; ?>" download><?php echo $software_file; ?></a>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-7" align="left">
                    ไฟล์คู่มือ
                    <input type="file" name="manualupload" id="manualupload" require>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"> </div>
                <div class="col-sm-8" align="right">
                    <input class="btn btn-danger" type="button" onclick="history.back();" name="back" value="Cancel">
                    <input class="btn btn-primary" type="submit" name="submit" value="Save">
                </div>
            </div>
        </form><br>
    </div>
</div>