<!--Show On Index-->
<?php
$path_basemodel             = "models/BaseModel.php";
$path_productmodel_input    = "models/productmodel/productinput.php";
$path_productmodel_delete   = "models/softwaremodel/softwaredelete.php";
?>

<script src="jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#categories').change(function() {
            $.ajax({
                type: 'POST',
                data: {
                    categories: $(this).val()
                },
                url: 'select_product.php',
                success: function(data) {
                    $('#products').html(data);
                }
            });
            return false;
        });
    });
</script>

<!--Upload Detail Product-->
<form action="<?php echo $path_productmodel_input; ?>" id="productinput" enctype="multipart/form-data" name="productinput" method="post">
    <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
        <tr bgcolor="#FFFFFF">
            <td>Image</td>
            <td><input type="file" name="product_image" id="product_image" required></td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td>Name</td>
            <td><input type="text" name="product_name_en" id="product_name_en" value="" required></td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td>Description</td>
            <td><input type="text" name="product_description_en" id="product_description_en" value="" required></td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td>Detail</td>
            <td><textarea name="product_detail_en" id="product_detail_en" required></textarea></td>
        </tr>
        <tr bgcolor="#FFFFFF">
            <td>Price</td>
            <td><input type="text" name="product_price" id="product_price" pattern="[0-9]{1,}" title="กรอกตัวเลขเท่านั้น" value="" required></td>
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
        <tr bgcolor="#FFFFFF">
            <td>Type</td>
            <td>
                <select name="product_line_up_id" id="product_line_up_id" required>
                    <option center value="">-----------Select-----------</option>
                    <?php
                    include $path_basemodel;
                    $sql = "SELECT * FROM tb_product_line_up WHERE product_type_id='2'";
                    $result = mysqli_query($connection, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <option value="<?php echo $row["product_line_up_id"]; ?>"><?php echo $row["product_line_up_name"]; ?></option>
                    <?php
                    }
                    mysqli_close($connection);
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
    $path = "../assets/images/product/";
    //include("../models/BaseModel.php");
    $sql = "SELECT * FROM tb_product LEFT JOIN tb_product_type
    ON tb_product.product_type_id = tb_product_type.product_type_id WHERE product_id = '" . $_GET["productall"] . "' ";
    $result = mysqli_query($connection, $sql);
?>
    <form>
        <div style=" width:550px; height:425px; overflow: auto;">

            <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
                <tr align="center" bgcolor="#FFFFFF">
                    <td>No</td>
                    <td>Product Image </td>
                    <td>Product Name</td>
                    <td>Product Description</td>
                    <td>Product Detail</td>
                    <td>Product Price</td>
                    <td>Produt Type</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) { ?>
                    <tr align="center" bgcolor="#FFFFFF">
                        <td hidden><?php echo $row["product_id"] ?></td>
                        <td><?php echo $i; ?></td>
                        <td><img height="100" src="<?php echo $path . $row["product_image"]; ?>"></td>
                        <td><?php echo $row["product_name_en"]; ?></td>
                        <td><?php echo $row["product_description_en"]; ?></td>
                        <td><?php echo $row["product_detail_en"]; ?></td>
                        <td><?php echo $row["product_price"]; ?></td>
                        <td><?php echo $row["product_type_name"]; ?></td>
                        <td><a href="views/productedit.php?edit_id=<?php echo $row["product_id"]; ?>">แก้ไข </a></td>
                        <td><a href="models/productmodel/productdelete.php?delete_id=<?php echo $row["product_id"]; ?>&delete_img=<?php echo $row["product_image"]; ?>" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')">ลบ</a></td>
                    </tr>
                <?php
                    $i++;
                }
                ?>
            </table>
        </div>
    </form>
<?php

} else if (isset($_GET["productall"]) == "") {
    $i = 1;
    $path = "../assets/images/product/";
    include $path_basemodel;
    $sql = "SELECT * FROM tb_product LEFT JOIN tb_product_type
    ON tb_product.product_type_id = tb_product_type.product_type_id";
    $result = mysqli_query($connection, $sql);
?>
    <div style=" width:1000px; height:425px; overflow: auto;">
        <form>
            <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
                <tr align="center" bgcolor="#FFFFFF">
                    <td>No</td>
                    <td>Product Image </td>
                    <td>Product Name</td>
                    <td>Product Description</td>
                    <td>Product Detail</td>
                    <td>Product Price</td>
                    <td>Produt Type</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr align="center" bgcolor="#FFFFFF">
                        <td hidden><?php echo $row["product_id"] ?></td>
                        <td><?php echo $i; ?></td>
                        <td><img height="100" src="<?php echo $path . $row["product_image"]; ?>"></td>
                        <td><?php echo $row["product_name_en"]; ?></td>
                        <td><?php echo $row["product_description_en"]; ?></td>
                        <td><?php echo $row["product_detail_en"]; ?></td>
                        <td><?php echo $row["product_price"]; ?></td>
                        <td><?php echo $row["product_type_name"]; ?></td>
                        <td><a href="views/productedit.php?edit_id=<?php echo $row["product_id"]; ?>">แก้ไข </a></td>
                        <td><a href="models/productmodel/productdelete.php?delete_id=<?php echo $row["product_id"]; ?>&delete_img=<?php echo $row["product_image"]; ?>" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')">ลบ</a></td>
                    </tr>
            <?php
                    $i++;
                }
            }
            ?>
            </table>
        </form>
    </div>