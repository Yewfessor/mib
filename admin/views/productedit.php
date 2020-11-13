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
<form action="<?php echo $path_edit; ?>" id="productedit" enctype="multipart/form-data" name="productedit" method="post">
    <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
        <tr bgcolor="#FFFFFF">
            <td>Image</td>
            <td>
                <img width="200" src="<?php echo $path_images.$product_image; ?>"><br>
                <input type="file" name="product_image_new" id="product_image_new" value="">
                <!-- hidden -->
                <input type="text" name="product_id" id="product_id" value="<?php echo $product_id; ?>" hidden>
                <input type="text" name="product_image" id="product_image" value="<?php echo $product_image; ?>" hidden>
            </td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td>Name</td>
            <td><input type="text" name="product_name_en" id="product_name_en" value="<?php echo $product_name_en; ?>" required></td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td>Description</td>
            <td><input type="text" name="product_description_en" id="product_description_en" value="<?php echo $product_description_en; ?>"></td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td>Detail</td>
            <td><textarea name="product_detail_en" id="product_detail_en" ><?php echo $product_detail_en; ?>"</textarea></td>
        </tr <tr bgcolor="#FFFFFF">
        <tr bgcolor="#FFFFFF">

            <td>Price</td>
            <td><input type="text" name="product_price" id="product_price" pattern="[0-9]{1,}" title="กรอกตัวเลขเท่านั้น" value="<?php echo $product_price; ?>" required></td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td>Category</td>
            <td>
                <select name="product_type_id" id="product_type_id" required>
                    <option center value="<?php echo $product_type_id; ?>"><?php echo $product_type_name; ?></option>
                    <option center value="">-----------Select-----------</option>
                    <?php
                    $sql_type = "SELECT * FROM tb_product_type";
                    $result_type = mysqli_query($connection, $sql_type);
                    while ($row_type = mysqli_fetch_array($result_type)) {
                    ?>
                        <option value="<?php echo $row_type["product_type_id"]; ?>"><?php echo $row_type["product_type_name"]; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        
        <tr bgcolor="#FFFFFF">
            <td>Type</td>
            <td>
                <select name="product_line_up_id" id="product_line_up_id" required>
                    <option center value="<?php echo $product_line_up_id; ?>"><?php echo $product_type_name." | ".$product_line_up_name; ?></option>
                    <option center value="">-----------Select-----------</option>
                    <?php
                    $sql_line = "SELECT * FROM tb_product_line_up 
                    LEFT JOIN tb_product_type
                    ON tb_product_line_up.product_type_id = tb_product_type.product_type_id
                    ";
                    $result_line = mysqli_query($connection, $sql_line);
                    while ($row_line = mysqli_fetch_array($result_line)) {
                    ?>
                        <option value="<?php echo $row_line["product_line_up_id"]; ?>"><?php echo $row_line["product_type_name"]." | ".$row_line["product_line_up_name"]; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr align="right" bgcolor="#FFFFFF">
            <td colspan="2"><input type="button" onclick="history.back();" name="newssubmit" value="Cancel"> <input type="submit" name="productsubmit" value="Done"> </td>
        </tr>
    </table>
</form>