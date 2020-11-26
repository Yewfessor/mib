<?php
//get
$product_id = $_GET['edit_id'];

//path
$path_basemodel = "../models/BaseModel.php";
$path_edit      = "../models/productmodel/productedit.php";
$path_images     = "../../assets/images/product/";

//sql
include $path_basemodel;
$sql = "SELECT * FROM tb_product 
        LEFT JOIN tb_product_type
        ON tb_product.product_type_id = tb_product_type.product_type_id 
        LEFT JOIN tb_product_line_up
        ON tb_product.product_line_up_id = tb_product_line_up.product_line_up_id 
        WHERE product_id='" . $product_id . "'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

//row
$product_id = $row['product_id'];
$product_image = $row['product_image'];
$product_name_en = $row['product_name_en'];
$product_description_en = $row['product_description_en'];
$product_detail_en = $row['product_detail_en'];
$product_price = $row['product_price'];
$product_type_id = $row['product_type_id'];
$product_type_name = $row["product_type_name"];
$product_line_up_id = $row["product_line_up_id"];
$product_line_up_name = $row["product_line_up_name"];


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

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="thumbnail">
        <br><br>
        <form class="form-horizontal" action="<?php echo $path_edit; ?>" id="productedit" enctype="multipart/form-data" name="productedit" method="post">
            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-8" align="left">
                    ชื่อสินค้า
                    <input class="form-control" type="text" name="product_name_en" id="product_name_en" value="<?php echo $product_name_en; ?>" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-8" align="left">
                    คำอธิบาย
                    <input class="form-control" type="text" name="product_description_en" id="product_description_en" value="<?php echo $product_description_en; ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-3" align="left">
                    ประเภทสินค้า
                    <select class="form-control" name="product_type_id" id="product_type_id" required>
                        <option center value="<?php echo $product_type_id; ?>"><?php echo $product_type_name; ?></option>
                        <?php
                        include $path_basemodel;
                        $sql = "SELECT * FROM tb_product_type WHERE NOT product_type_id = $product_type_id";
                        $result = mysqli_query($connection, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <option value="<?php echo $row["product_type_id"]; ?>"><?php echo $row["product_type_name"]; ?></option>
                        <?php
                        }
                        mysqli_close($connection);
                        ?>
                    </select>
                </div>
                <div class="col-sm-4" align="left">
                    ประเภทย่อย
                    <select class="form-control" name="product_line_up_id" id="product_line_up_id" required>
                        <option center value="<?php echo $product_line_up_id; ?>"><?php echo $product_type_name . " | " . $product_line_up_name; ?></option>
                        <?php
                        include $path_basemodel;
                        $sql = "SELECT * FROM tb_product_line_up 
                                LEFT JOIN tb_product_type
                                ON tb_product_line_up.product_type_id = tb_product_type.product_type_id
                                WHERE NOT product_line_up_id = $product_line_up_id";
                        $result = mysqli_query($connection, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <option value="<?php echo $row["product_line_up_id"]; ?>"><?php echo $row["product_type_name"] . " | " . $row["product_line_up_name"]; ?></option>
                        <?php
                        }
                        mysqli_close($connection);
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-8" align="left">
                    รายละเอียด
                    <textarea class="ckeditor" cols="69" rows="5" name="product_detail_en" id="product_detail_en"><?php echo $product_detail_en; ?></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-2" align="left">
                    ราคา
                    <input class="form-control" type="text" name="product_price" id="product_price" pattern="[0-9]{1,}" title="กรอกตัวเลขเท่านั้น" value="<?php echo $product_price; ?>" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-7" align="left">
                    ไฟล์ประกอบ<br>
                    <img class="thumbnail" width="200" src="<?php echo $path_images . $product_image; ?>"><br>
                    <input type="file" name="product_image_new" id="product_image_new" value="">
                    <!-- hidden -->
                    <input type="text" name="product_id" id="product_id" value="<?php echo $product_id; ?>" hidden>
                    <input type="text" name="product_image" id="product_image" value="<?php echo $product_image; ?>" hidden>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"> </div>
                <div class="col-sm-8" align="right">
                    <input class="btn btn-danger" type="button" onclick="history.back();" name="newssubmit" value="Cancel">
                    <input class="btn btn-primary" type="submit" name="productsubmit" value="Save">
                </div>
            </div>
        </form>
        </form>
    </div>
</div>