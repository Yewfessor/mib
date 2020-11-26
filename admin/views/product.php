<!--Show On Index-->
<?php
$path_basemodel     = "models/BaseModel.php";
$path_modelinput    = "models/productmodel/productinput.php";
$path_modeldelete   = "models/productmodel/productdelete.php";
$path_modeledit     = "views/productedit.php";
$path_image         = "../assets/images/product/";

?>


<div class="col-xs-12 col-sm-12 col-md-12">
<h1 id="slide-product">Manage Product</h1><br>

    <div class="thumbnail">
        <br><br>
        <form class="form-horizontal" action="<?php echo $path_modelinput; ?>" id="productinput" enctype="multipart/form-data" name="productinput" method="post">

            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-8" align="left">
                    ชื่อสินค้า
                    <input class="form-control" type="text" name="product_name_en" id="product_name_en" value="" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-8" align="left">
                    คำอธิบาย
                    <input class="form-control" type="text" name="product_description_en" id="product_description_en" value="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-3" align="left">
                    ประเภทสินค้า
                    <select class="form-control" name="product_type_id" id="product_type_id" required>
                        <option center value="">-Select-</option>
                        <?php
                        include $path_basemodel;
                        $sql = "SELECT * FROM tb_product_type";
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
                        <option center value="">-Select-</option>
                        <?php
                        include $path_basemodel;
                        $sql = "SELECT * FROM tb_product_line_up 
                                LEFT JOIN tb_product_type
                                ON tb_product_line_up.product_type_id = tb_product_type.product_type_id";
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
                    <textarea class="ckeditor" cols="69" rows="5" name="product_detail_en" id="product_detail_en"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-2" align="left">
                    ราคา
                    <input class="form-control" type="text" name="product_price" id="product_price" pattern="[0-9]{1,}" title="กรอกตัวเลขเท่านั้น" value="" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-7" align="left">
                    ไฟล์ประกอบ
                    <input type="file" name="product_image" id="product_image" required></td>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"> </div>
                <div class="col-sm-8" align="right">
                    <input class="btn btn-primary" type="submit" name="productsubmit" value="Save">
                </div>
            </div>
        </form>
    </div>
</div>
<br>

<form name="productsearch" method="get" action="">
    <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
        <tr align="center" bgcolor="#FFFFFF">
            <th> Search
                <input name="productall" id="productall" type="text" value="">
                <input type="submit" value="Search">
                &nbsp;<a href="index.php"><i class="fas fa-sync-alt"></i></a>
            </th>
        </tr>
    </table>
</form>
<br>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="thumbnail" style="height:270px; width:100%; overflow: auto;">
        <br>

        <?php
        if (isset($_GET["productall"]) != "") {
            $i = 1;
            include $path_basemodel;
            $sql = "SELECT * FROM tb_product 
                            LEFT JOIN tb_product_type
                            ON tb_product.product_type_id = tb_product_type.product_type_id
                            LEFT JOIN tb_product_line_up
                            ON tb_product.product_line_up_id = tb_product_line_up.product_line_up_id
                            WHERE product_id = '" . $_GET["productall"] . "'";
            $result = mysqli_query($connection, $sql);
        ?>
            <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
                <tr align="center" bgcolor="#FFFFFF">
                    <td>Image </td>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Detail</td>
                    <td>Price</td>
                    <td>Category</td>
                    <td>Type</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr align="center" bgcolor="#FFFFFF">
                        <td><img height="100px" src="<?php echo $path_image . $row["product_image"]; ?>"></td>
                        <td><?php echo $row["product_name_en"]; ?></td>
                        <td><?php echo $row["product_description_en"]; ?></td>
                        <td><?php echo $row["product_detail_en"]; ?></td>
                        <td><?php echo number_format($row["product_price"]); ?> บาท</td>
                        <td><?php echo $row["product_type_name"]; ?></td>
                        <td><?php echo $row["product_line_up_name"]; ?></td>
                        <td><a href="<?php echo $path_modeledit . "?edit_id=" . $row["product_id"]; ?>"><i class="fas fa-edit"></i></a></td>
                        <td><a href="<?php echo $path_modeldelete . "?delete_id=" . $row["product_id"] . "&delete_img=" . $row["product_image"]; ?>" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')">ลบ</a></td>
                    </tr>
                <?php
                    $i++;
                }
                mysqli_close($connection);
                ?>
            </table>
        <?php

        } else if (isset($_GET["productall"]) == "") {
            $i = 1;
            include $path_basemodel;
            $sql = "SELECT * FROM tb_product 
                            LEFT JOIN tb_product_type
                            ON tb_product.product_type_id = tb_product_type.product_type_id
                            LEFT JOIN tb_product_line_up
                            ON tb_product.product_line_up_id = tb_product_line_up.product_line_up_id";
            $result = mysqli_query($connection, $sql);
        ?>
            <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
                <tr align="center">
                    <td>&nbsp;&nbsp;</td>
                    <td>Product ID</td>
                    <td>Image </td>
                    <td>Name</td>
                    <td>Description</td>
                   <!-- <td>Detail</td>-->
                    <td>Price</td>
                    <td>Category</td>
                    <td>Type</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td align="center"><img height="100px" src="<?php echo $path_image . $row["product_image"]; ?>"></td>
                        <td align="center"><?php echo $row["product_name_en"]; ?></td>
                        <td align="center"><?php echo $row["product_description_en"]; ?></td>
                        <!--<td><?php // echo $row["product_detail_en"]; ?></td>-->
                        <td align="center"><?php echo number_format($row["product_price"]); ?> บาท</td>
                        <td align="center"><?php echo $row["product_type_name"]; ?></td>
                        <td align="center"><?php echo $row["product_line_up_name"]; ?></td>
                        <td><a href="<?php echo $path_modeledit . "?edit_id=" . $row["product_id"]; ?>"><i class="fas fa-edit"></i></a></td>
                        <td><a href="<?php echo $path_modeldelete . "?delete_id=" . $row["product_id"] . "&delete_img=" . $row["product_image"]; ?>" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
            <?php
                    $i++;
                }
            }
            mysqli_close($connection);
            ?>
            </table>
    </div>
</div>