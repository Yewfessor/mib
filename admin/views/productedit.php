<?php
$product_id = $_GET['edit_id'];

include("../models/BaseModel.php");
$sql = "SELECT * FROM tb_product LEFT JOIN tb_product_type
ON tb_product.product_type_id = tb_product_type.product_type_id WHERE product_id='" . $product_id . "'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

?>

<form action="models/productmodel/productedit.php" id="productedit" enctype="multipart/form-data" name="productedit" method="post">
    <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
        <tr bgcolor="#FFFFFF">
            <td>Product Image : </td>
            <td>
                <img width="200" src="../../assets/images/product/<?php echo "$row[product_image]"; ?>"><br>
                <input type="file" name="product_image" id="product_image" value="<?php echo "$row[product_image]"; ?>" required>
            </td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td>Product Name : </td>
            <td><input type="text" name="product_name_en" id="product_name_en" value="<?php echo "$row[product_name_en]"; ?>" required></td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td>Product Description : </td>
            <td><input type="text" name="product_description_en" id="product_description_en" value="<?php echo "$row[product_description_en]"; ?>" required></td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td>Product Detail : </td>
            <td><textarea name="product_detail_en" id="product_detail_en" required><?php echo "$row[product_detail_en]"; ?>"</textarea></td>
        </tr <tr bgcolor="#FFFFFF">
        <tr bgcolor="#FFFFFF">

            <td>Product Price : </td>
            <td><input type="text" name="product_price" id="product_price" pattern="[0-9]{1,}" title="กรอกตัวเลขเท่านั้น" value="<?php echo "$row[product_price]"; ?>" required></td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td> Product Type : </td>
            <td>
                <select name="product_type_id" id="product_type_id" required>
                    <option center value="<?php echo $row["product_type_id"]; ?>"><?php echo $row["product_type_name"]; ?></option>
                    <option center value="">-----------Select-----------</option>
                    <?php
                    include("../models/BaseModel.php");
                    $sql = "SELECT * FROM tb_product_type";
                    $result = mysqli_query($connection, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <option value="<?php echo $row["product_type_id"]; ?>"><?php echo $row["product_type_name"]; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr align="right" bgcolor="#FFFFFF">
            <td></td>
            <td><input type="submit" name="productsubmit" value="Save"></td>
        </tr>
    </table>
</form>