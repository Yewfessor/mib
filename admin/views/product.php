<!--Show On Index-->
<?php
$path_basemodel     = "models/BaseModel.php";
$path_modelinput    = "models/productmodel/productinput.php";
$path_modeldelete   = "models/productmodel/productdelete.php";
$path_modeledit     = "views/productedit.php";
$path_image         = "../assets/images/product/";

?>

<!--Upload Detail Product-->

<form action="<?php echo $path_modelinput; ?>" id="productinput" enctype="multipart/form-data" name="productinput" method="post">
    <div class="form-container">
        <table class="product-form-table">
            <tr>
                <td>Image</td>
                <td><input type="file" name="product_image" id="product_image" required></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="product_name_en" id="product_name_en" value="" required></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><input type="text" name="product_description_en" id="product_description_en" value=""></td>
            </tr>
            <tr>
                <td>Detail</td>
                <td><textarea name="product_detail_en" id="product_detail_en"></textarea></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="product_price" id="product_price" pattern="[0-9]{1,}" title="กรอกตัวเลขเท่านั้น" value="" required></td>
            </tr>
            <tr>
                <td>Category</td>
                <td>
                    <select name="product_type_id" id="product_type_id" required>
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
                </td>
            </tr>
            <tr>
                <td>Type</td>
                <td>
                    <select name="product_line_up_id" id="product_line_up_id" required>
                        <option center value="">-Select-</option>
                        <?php
                        include $path_basemodel;
                        $sql = "SELECT * FROM tb_product_line_up 
                                LEFT JOIN tb_product_type
                                ON tb_product_line_up.product_type_id = tb_product_type.product_type_id
                        ";
                        $result = mysqli_query($connection, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <option value="<?php echo $row["product_line_up_id"]; ?>"><?php echo $row["product_type_name"] . " | " . $row["product_line_up_name"]; ?></option>
                        <?php
                        }
                        mysqli_close($connection);
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2" class="submit-btn"><input type="submit" name="productsubmit" class="save-btn" value="Save"></td>
            </tr>
        </table>
    </div>
</form>

<br>

<form name="productsearch" method="get" action="">
    <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
        <tr align="center" bgcolor="#FFFFFF">
            <th> Search
                <input name="productall" id="productall" type="text" value="">
                <input type="submit" value="Search">
                <a href="index.php">Refresh</a>
            </th>
        </tr>
    </table>
</form>

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
    <div style=" width:1000px; height:425px; overflow: auto;">
        <form>
            <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
                <tr align="center" bgcolor="#FFFFFF">
                    <td>Id</td>
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
                        <td><?php echo $row["product_id"] ?></td>
                        <td><img height="100" src="<?php echo $path_image . $row["product_image"]; ?>"></td>
                        <td><?php echo $row["product_name_en"]; ?></td>
                        <td><?php echo $row["product_description_en"]; ?></td>
                        <td><?php echo $row["product_detail_en"]; ?></td>
                        <td><?php echo number_format($row["product_price"]); ?> บาท</td>
                        <td><?php echo $row["product_type_name"]; ?></td>
                        <td><?php echo $row["product_line_up_name"]; ?></td>
                        <td><a href="<?php echo $path_modeledit . "?edit_id=" . $row["product_id"]; ?>">แก้ไข </a></td>
                        <td><a href="<?php echo $path_modeldelete . "?delete_id=" . $row["product_id"] . "&delete_img=" . $row["product_image"]; ?>" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')">ลบ</a></td>
                    </tr>
                <?php
                    $i++;
                }
                mysqli_close($connection);
                ?>
            </table>
        </form>
    </div>
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
    <div style=" width:1000px; height:425px; overflow: auto;">
        <form>
            <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
                <tr align="center" bgcolor="#FFFFFF">
                    <td>Id</td>
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
                        <td><?php echo $row["product_id"] ?></td>
                        <td><img height="100" src="<?php echo $path_image . $row["product_image"]; ?>"></td>
                        <td><?php echo $row["product_name_en"]; ?></td>
                        <td><?php echo $row["product_description_en"]; ?></td>
                        <td><?php echo $row["product_detail_en"]; ?></td>
                        <td><?php echo number_format($row["product_price"]); ?> บาท</td>
                        <td><?php echo $row["product_type_name"]; ?></td>
                        <td><?php echo $row["product_line_up_name"]; ?></td>
                        <td><a href="<?php echo $path_modeledit . "?edit_id=" . $row["product_id"]; ?>">แก้ไข </a></td>
                        <td><a href="<?php echo $path_modeldelete . "?delete_id=" . $row["product_id"] . "&delete_img=" . $row["product_image"]; ?>" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
            <?php
                    $i++;
                }
            }
            mysqli_close($connection);
            ?>
            </table>
        </form>
    </div>