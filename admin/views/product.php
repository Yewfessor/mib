<!--Show On Index-->
<?php
$path_basemodel     = "models/BaseModel.php";
$path_modelinput    = "models/productmodel/productinput.php";
$path_modeldelete   = "models/productmodel/productdelete.php";
$path_modeledit     = "views/productedit.php";
$path_image         = "../assets/images/product/";
?>


<div class="col-xs-12 col-sm-12 col-md-12" id="product">
    <h1 id="slide-product">Manage Product</h1><br>
    <div class="thumbnail">
        <div class="" align="center">
            <h3>เพิ่มสินค้า</h3>
        </div>
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
                <div class="col-sm-3" align="left">
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
                <div class="col-sm-2" align="left">
                    สถานะ
                    <select class="form-control" name="list_no" id="list_no" required>
                        <option value="0">มีสินค้า</option>
                        <option value="1">สินค้าหมด</option>
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
                    <input class="form-control" type="text" name="product_price" id="product_price" pattern="[0-9]{1,}" title="ตัวอย่าง : 1000 999 200" value="" required placeholder="ตัวเลขเท่านั้น">
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
                    <input class="btn btn-primary" type="submit" name="productsubmit" value="บันทึก">
                </div>
            </div>
        </form>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <form class="form-inline" name="searchformproduct" id="searchformproduct">
        <div class="form-group ">
            <label for="textsearch">Search&nbsp;</label>
            <input type="text" name="productall" id="productall" class="form-control" placeholder="Product ID!" autocomplete="off">
        </div>
        <button type="button" class="btn btn-primary" id="btnSearchproduct">
            <span class="glyphicon glyphicon-search"></span>
            ค้นหา
        </button>
    </form>
</div>

<br>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div id="list-dataproduct" style="margin-top: 10px;">
        <div class="thumbnail" style="height:270px; width:100%; overflow: auto;">
            <?php
            include $path_basemodel;
            $sql = "SELECT * FROM tb_product 
                            LEFT JOIN tb_product_type
                            ON tb_product.product_type_id = tb_product_type.product_type_id
                            LEFT JOIN tb_product_line_up
                            ON tb_product.product_line_up_id = tb_product_line_up.product_line_up_id ORDER BY lastupdate DESC";
            $result = mysqli_query($connection, $sql);
            ?>
            <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC" width="100%">
                <tr align="center">
                    <td>&nbsp;&nbsp;</td>
                    <td align="center"><strong>Product ID</strong></td>
                    <td align="center"><strong>Image</strong></td>
                    <td align="center"><strong>Name</strong></td>
                    <td align="center"><strong>Description</strong></td>
                    <td align="center"><strong>Price</strong></td>
                    <td align="center"><strong>Category</strong></td>
                    <td align="center"><strong>Type</strong></td>
                    <td align="center" colspan="2"><strong>Option</strong></td>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr align="center" height="150px">
                        <td></td>
                        <td align="center"><?php echo $row["product_id"]; ?></td>
                        <td align="center"><img height="100px" src="<?php echo $path_image . $row["product_image"]; ?>"></td>
                        <td align="center"><?php echo $row["product_name_en"]; ?></td>
                        <td align="center"><?php echo $row["product_description_en"]; ?></td>
                        <td align="center"><?php echo number_format($row["product_price"]); ?> บาท</td>
                        <td align="center"><?php echo $row["product_type_name"]; ?></td>
                        <td align="center"><?php echo $row["product_line_up_name"]; ?></td>
                        <td align="center">
                            <a href="<?php echo $path_modeledit . "?edit_id=" . $row["product_id"]; ?>"><i class="fas fa-edit"></i></a>
                        </td>
                        <td align="center">
                            <a href="<?php echo $path_modeldelete . "?delete_id=" . $row["product_id"] . "&delete_img=" . $row["product_image"]; ?>" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                <?php
                }
                mysqli_close($connection);

                ?>
            </table>
        </div>
    </div>
</div>