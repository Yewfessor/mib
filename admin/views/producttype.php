<!--Show On Index-->
<?php
$path_basemodel                 = "models/BaseModel.php";
$path_producttypemodel_input    = "models/producttypemodel/typeinput.php";
$path_producttypemodel_delete   = "models/producttypemodel/typedelete.php";
?>

<!--Upload Detail Product-->
<div class="col-xs-12 col-sm-6 col-md-6">
    <div class="thumbnail">
        <h3>Name type</h3>
        <form class="form-horizontal" action="<?php echo $path_producttypemodel_input; ?>" id="typeinput" enctype="multipart/form-data" name="typeinput" method="post">
            <div class="form-group">
                <div class="col-xs-10">
                    <input class="form-control" name="product_type_name" id="product_type_name" value="" required>
                </div>
                <div class="col-xs-1">
                    <button class="btn btn-default" type="submit" name="typesubmit">
                        <i class="far fa-save"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <br>

    <div class="thumbnail" style="height:270px; width:100%; overflow: auto;">

        <?php
        include $path_basemodel;
        $sql = "SELECT * FROM tb_product_type";
        $result = mysqli_query($connection, $sql);
        ?>
        <form>
            <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
                <tr align="center" bgcolor="#FFFFFF">
                    <td>Type </td>
                    <td>Delete</td>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr align="center" bgcolor="#FFFFFF">
                        <td hidden><?php echo $row["product_type_id"] ?></td>
                        <td><?php echo $row["product_type_name"]; ?></td>
                        <td><a href="models/producttypemodel/typedelete.php?delete_id=<?php echo $row["product_type_id"]; ?>" onclick="return confirm('โปรดตรวจสอบ Sub-type ก่อนลบ')">ลบ</a></td>
                    </tr>
                <?php
                }
                mysqli_close($connection);
                ?>
            </table>
        </form>
    </div>
</div>