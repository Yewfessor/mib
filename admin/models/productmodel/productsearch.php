<?php
//path
$path_basemodel     = "../BaseModel.php";
$path_image         = "../assets/images/product/";
$path_modelinput    = "productinput.php";
$path_modeldelete   = "productdelete.php";
$path_modeledit     = "views/productedit.php";

include $path_basemodel;

$sql = "SELECT * FROM tb_product 
LEFT JOIN tb_product_type
ON tb_product.product_type_id = tb_product_type.product_type_id
LEFT JOIN tb_product_line_up
ON tb_product.product_line_up_id = tb_product_line_up.product_line_up_id
WHERE product_id Like '%{$_POST['productall']}%' ORDER BY product_id ASC";
$result = mysqli_query($connection, $sql);
?>
<div class="thumbnail" style="height:270px; width:100%; overflow: auto;">
    <table border="0" cellpadding="3" cellspacing="1" width="100%">
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
        ?>
    </table>
</div>