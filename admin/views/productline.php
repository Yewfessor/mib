<!--Show On Index-->
<?php
$path_basemodel                 = "models/BaseModel.php";
$path_productlinemodel_input    = "models/productlinemodel/productlineinput.php";
$path_productlinemodel_delete   = "models/productlinemodel/productlinedelete.php";
?>

<!--Upload Detail Product-->
<div class="col-xs-12 col-sm-6 col-md-6" id="product-category">
    <div class="thumbnail" >
        <h3>Name Sub-Type</h3>
        <form class="form-horizontal" action="<?php echo $path_productlinemodel_input; ?>" id="productlineinput" enctype="multipart/form-data" name="productlineinput" method="post">
            <div class="form-group">
                <div class="col-xs-5">
                    <select class="form-control" name="product_type_id" id="product_type_id" required>
                        <option center value="">-----------Select-----------</option>
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
                <div class="col-xs-5">
                    <input class="form-control" type="text" name="product_line_up_name" id="product_line_up_name" value="" required placeholder="ชื่อหมวดหมู่ย่อย">
                </div>
                <div class="col-sm-1">
                    <button class="btn btn-default" type="submit" name="productlinesubmit">
                        บันทึก
                    </button>
                </div>
            </div>
        </form>
    </div>
    <br>
    <div class="thumbnail" style="height:270px; width:100%; overflow: auto;">

        <?php
        $path = "../assets/images/product/";
        include $path_basemodel;
        $sql = "SELECT * FROM 
    tb_product_line_up
    LEFT JOIN tb_product_type
    ON tb_product_line_up.product_type_id = tb_product_type.product_type_id";
        $result = mysqli_query($connection, $sql);
        ?>
        <form>
            <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC"  width="100%">
                <tr align="center" bgcolor="#FFFFFF">
                    <td align="center"><strong>Type</strong></td>
                    <td align="center"><strong>Sub-Type</strong></td>
                    <td align="center"><strong>Delete</strong></td>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr align="center" bgcolor="#FFFFFF">
                        <td hidden><?php echo $row["product_line_up_id"] ?></td>
                        <td><?php echo $row["product_type_name"]; ?></td>
                        <td><?php echo $row["product_line_up_name"]; ?></td>
                        <td><a href="models/productlinemodel/productlinedelete.php?delete_id=<?php echo $row["product_line_up_id"]; ?>" 
                        onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
                <?php
                }
                mysqli_close($connection);
                ?>
            </table>
        </form>
    </div>
</div>