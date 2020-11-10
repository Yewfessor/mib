<!--Show On Index-->
<?php
$path_basemodel                 = "models/BaseModel.php";
$path_sofwaremodel_upload       = "models/softwaremodel/softwareupload.php";
$path_sofwaremodel_delete       = "models/softwaremodel/softwaredelete.php";
$path_sofwaremodel_download     = "models/softwaremodel/softwaredownload.php";

?>

<!--Upload Detail Software-->
<div>
    <form action="<?php echo $path_sofwaremodel_upload; ?>" method="post" enctype="multipart/form-data" name="upload_software">
        <table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
            <tr bgcolor="#FFFFFF">
                <td>Filename</td>
                <td><input type="text" name="software_name" id="software_name" value="" required></td>
            </tr>
            <tr bgcolor="#FFFFFF">
                <td>Description</td>
                <td><textarea name="software_desription_en" id="software_desription_en"></textarea></td>
            </tr>
            <tr bgcolor="#FFFFFF">
                <td>Type</td>
                <td>
                    <select name="software_type_id" id="software_type_id" required>
                        <option value="">---------------Select---------------</option>
                        <?php
                        include $path_basemodel;
                        $sql = "SELECT * FROM tb_software_type";
                        $result = mysqli_query($connection, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <option value="<?php echo $row["software_type_id"]; ?>"><?php echo $row["software_type_name"]; ?></option>
                        <?php
                        }
                        mysqli_close($connection);
                        ?>
                    </select>
                </td>
            </tr>
            <tr bgcolor="#FFFFFF">
                <td>Category</td>
                <td>
                    <select name="product_type_id" id="product_type_id" required>
                        <option value="">---------------Select---------------</option>
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
                <td colspan="2" bgcolor="#FFFFFF"><input type="file" name="fileupload" id="fileupload" multiple><input type="submit" name="Submit" value="Upload"></td>
            </tr>
        </table>
    </form><br>
</div>

<!--Show Detail Software-->
<div style=" width:1000px; height:425px; overflow: auto;">
    <form>
        <table width="1000" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
            <tr>
                <td width="5%" align="center" bgcolor="#FFFFFF"><strong>ID</td>
                <td width="10%" align="center" bgcolor="#FFFFFF"><strong>Add-Date</strong></td>
                <td width="30%" align="center" bgcolor="#FFFFFF"><strong>File Name</td>
                <td width="30%" align="center" bgcolor="#FFFFFF"><strong>Description</td>
                <td width="10%" align="center" bgcolor="#FFFFFF"><strong>Type</td>
                <td width="30%" align="center" bgcolor="#FFFFFF"><strong>Category</td>
                <td align="center" bgcolor="#FFFFFF" width="150px"><strong>Download</strong></td>
                <td align="center" bgcolor="#FFFFFF" width="150px"><strong>Delete</strong></td>
            </tr>
            <?php
            include $path_basemodel;
            $sql = "SELECT * FROM 
            tb_software 
            LEFT JOIN tb_product_type 
            ON tb_software.product_type_id = tb_product_type.product_type_id 
            LEFT JOIN tb_software_type
            ON tb_software.software_type_id = tb_software_type.software_type_id";
            $result = mysqli_query($connection, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td align="center" bgcolor="#FFFFFF"><?php echo $row["software_id"]; ?></td>
                    <td align="center" bgcolor="#FFFFFF"><?php echo $row["adddate"]; ?></td>
                    <td align="center" bgcolor="#FFFFFF"><?php echo $row["software_name"]; ?></td>
                    <td align="center" bgcolor="#FFFFFF"><?php echo $row["software_description_en"]; ?></td>
                    <td align="center" bgcolor="#FFFFFF"><?php echo $row["software_type_name"]; ?></td>
                    <td align="center" bgcolor="#FFFFFF"><?php echo $row["product_type_name"]; ?></td>
                    <td align="center" bgcolor="#FFFFFF">
                        <a href="<?php echo $path_sofwaremodel_download; ?>?download_id=<?php echo $row["software_id"]; ?>">Download</a>
                    </td>
                    <td align="center" bgcolor="#FFFFFF">
                        <a href="<?php echo $path_sofwaremodel_delete; ?>?delete_id=<?php echo $row["software_id"]; ?>&delete_file=<?php echo $row["software_file"]; ?>" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')">ลบ</a>
                    </td>
                </tr>
            <?php
            }
            mysqli_close($connection);
            ?>
        </table>
    </form>
</div>