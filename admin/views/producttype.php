<!--Show On Index-->
<?php
$path_basemodel                 = "models/BaseModel.php";
$path_producttypemodel_input    = "models/producttypemodel/typeinput.php";
$path_producttypemodel_delete   = "models/producttypemodel/typedelete.php";
?>

<?php
include $path_basemodel;
$sql = "SELECT * FROM tb_product_type ORDER BY list_no ASC";
$result = mysqli_query($connection, $sql);
$rows = mysqli_num_rows($result);
?>

<!--Upload Detail Product-->
<div class="col-xs-12 col-sm-6 col-md-6" id="product-type">
    <div class="thumbnail">
        <h3 center>Name type</h3>
        <form class="form-horizontal" action="<?php echo $path_producttypemodel_input; ?>" id="typeinput" enctype="multipart/form-data" name="typeinput" method="post">
            <div class="form-group">
                <div class="col-xs-5">
                    <input class="form-control" name="product_type_name" id="product_type_name" value="" required placeholder="ชื่อหมวดหมู่">
                </div>
                <div class="col-xs-5">
                    <input class="form-control" type="number" name="list_no" id="" value="<?php echo $rows + 1 ?>" required placeholder="ลำดับหมวดหมู่">
                </div>
                <div class="col-sm-1">
                    <button class="btn btn-default" type="submit" name="typesubmit">
                        บันทึก
                    </button>
                </div>
            </div>
        </form>
    </div>
    <br>

    <div class="thumbnail" style="height:270px; width:100%; overflow: auto;">

        <form>
            <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC" width="100%">
                <tr align="center" bgcolor="#FFFFFF">
                    <td align="center"><strong>หมวดหมู่</strong></td>
                    <td align="center"><strong>ลำกับ</strong></td>
                    <td align="center"><strong>ลบ</strong></td>
                    
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr align="center" bgcolor="#FFFFFF">
                        <td hidden><?php echo $row["product_type_id"] ?></td>
                        <td><?php echo $row["product_type_name"]; ?></td>
                        <td><?php echo $row["list_no"]; ?></td>
                        <td ><a href="models/producttypemodel/typedelete.php?delete_id=<?php echo $row["product_type_id"]; ?>" onclick="return confirm('โปรดตรวจสอบ หมวดหมู่ย่อย ก่อนลบ')"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        
                    </tr>
                    
                <?php
                }
                ?>

            </table>
        </form>
    </div>
</div>