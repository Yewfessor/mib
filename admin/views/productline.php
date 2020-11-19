<!--Show On Index-->
<?php
$path_basemodel                 = "models/BaseModel.php";
$path_productlinemodel_input    = "models/productlinemodel/productlineinput.php";
$path_productlinemodel_delete   = "models/productlinemodel/productlinedelete.php";
?>

<!--Upload Detail Product-->
<form action="<?php echo $path_productlinemodel_input; ?>" id="productlineinput" enctype="multipart/form-data" name="productlineinput" method="post">
    <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
        <tr bgcolor="#FFFFFF">
            <td>Name Sub-Type</td>
            <td><input type="text" name="product_line_up_name" id="product_line_up_name" value="" required></td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td>Categort</td>
            <td>
                <select name="product_type_id" id="product_type_id" required>
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
            </td>
        </tr>
        <tr align="right" bgcolor="#FFFFFF">
            <td colspan="2"><input type="submit" name="productlinesubmit" value="Create"></td>
        </tr>
    </table>
</form>

<br>

<?php
$path = "../assets/images/product/";
include $path_basemodel;
$sql = "SELECT * FROM 
    tb_product_line_up
    LEFT JOIN tb_product_type
    ON tb_product_line_up.product_type_id = tb_product_type.product_type_id";
$result = mysqli_query($connection, $sql);
?>
<div style=" width:400px; height:250px; overflow: auto;">
    <form>
        <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
            <tr align="center" bgcolor="#FFFFFF">
                <td>Type</td>
                <td>Sub-Type </td>
                <td>Delete</td>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr align="center" bgcolor="#FFFFFF">
                    <td hidden><?php echo $row["product_line_up_id"] ?></td>
                    <td><?php echo $row["product_type_name"]; ?></td>
                    <td><?php echo $row["product_line_up_name"]; ?></td>
                    <td><a href="models/productlinemodel/productlinedelete.php?delete_id=<?php echo $row["product_line_up_id"]; ?>" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
            <?php
            }
            mysqli_close($connection);
            ?>
        </table>
    </form>
</div>