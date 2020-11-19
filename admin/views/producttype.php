<!--Show On Index-->
<?php
$path_basemodel                 = "models/BaseModel.php";
$path_producttypemodel_input    = "models/producttypemodel/typeinput.php";
$path_producttypemodel_delete   = "models/producttypemodel/typedelete.php";
?>

<!--Upload Detail Product-->
<form action="<?php echo $path_producttypemodel_input; ?>" id="typeinput" enctype="multipart/form-data" name="typeinput" method="post">
    <table border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
        <tr bgcolor="#FFFFFF">
            <td>Name type</td>
            <td><input type="text" name="product_type_name" id="product_type_name" value="" required></td>
        </tr>
        <tr align="right" bgcolor="#FFFFFF">
            <td colspan="2"><input type="submit" name="typesubmit" value="Create"></td>
        </tr>
    </table>
</form>

<br>

<?php
    include $path_basemodel;
    $sql = "SELECT * FROM tb_product_type";
    $result = mysqli_query($connection, $sql);
?>
<div style=" width:250px; height:100px; overflow: auto;">
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
                    <td><a href="models/producttypemodel/typedelete.php?delete_id=<?php echo $row["product_type_id"]; ?>" 
                    onclick="return confirm('โปรดตรวจสอบ Sub-type ก่อนลบ')">ลบ</a></td>
                </tr>
            <?php
            }
            mysqli_close($connection);
            ?>
        </table>
    </form>
</div>