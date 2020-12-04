
<?php
    $path_basemodel = "../../admin/models/BaseModel.php";
    $path_software  = "../../assets/software/";
    $path_manual    = "../../assets/manual/";
?>

<a href="<?php echo $path_software ?>FileZilla_3.51.0_win64_sponsored-setup.rar" download>
    download
</a>


<form>
            <table border="0" cellpadding="3" cellspacing="1" width="100%">
                <tr>
                    <td align="center"><strong>File Name</strong></td>
                    <td align="center"><strong>Description</strong></td>
                    <td align="center"><strong>Type</strong></td>
                    <td align="center"><strong>Category</strong></td>
                    <td align="center" colspan="2"><strong>Option</strong></td>
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
                        <td align="center"><?php echo $row["software_name"]; ?></td>
                        <td align="center"><?php echo $row["software_description_en"]; ?></td>
                        <td align="center"><?php echo $row["software_type_name"]; ?></td>
                        <td align="center"><?php echo $row["product_type_name"]; ?></td>
                        <td align="center">
                            <a href="<?php echo $path_software.$row["software_file"]; ?>" download>software</i></a>
                            <a href="<?php echo $path_manual.$row["software_manual"]; ?>" download>manual</i></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </form>