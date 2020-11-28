<!--Show On Index-->
<?php
$path_basemodel                 = "models/BaseModel.php";
$path_sofwaremodel_upload       = "models/softwaremodel/softwareupload.php";
$path_sofwaremodel_delete       = "models/softwaremodel/softwaredelete.php";
$path_sofwaremodel_download     = "models/softwaremodel/softwaredownload.php";

?>

<!--Upload Detail Software-->
<div class="col-xs-12 col-sm-12 col-md-12">
    <h1 id="slide-product">Manage Software</h1><br>

    <div class="thumbnail">
        <div class="" align="center">
            <h3>Add Software</h3>
        </div>
        <form class="form-horizontal" action="<?php echo $path_sofwaremodel_upload; ?>" method="post" enctype="multipart/form-data" name="upload_software">
            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-8" align="left">
                    ชื่อไฟล์
                    <input class="form-control" type="text" name="software_name" id="software_name" value="" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-8" align="left">
                    รายละเอียดไฟล์
                    <textarea class="form-control" name="software_desription_en" id="software_desription_en"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-8" align="left">
                    ประเภทไฟล์
                    <select class="form-control" name="software_type_id" id="software_type_id" required>
                        <option center value="">-Select-</option>
                        <?php
                        include $path_basemodel;
                        $sql = "SELECT * FROM tb_software_type";
                        $result = mysqli_query($connection, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <option value="<?php echo $row["software_type_id"]; ?>"><?php echo $row["software_type_name"]; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-8" align="left">
                    หมวดหมู่
                    <select class="form-control" name="product_type_id" id="product_type_id" required>
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
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-7" align="left">
                    ไฟล์ประกอบ
                    <input type="file" name="fileupload" id="fileupload" multiple>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"> </div>
                <div class="col-sm-8" align="right">
                    <input class="btn btn-primary" type="submit" name="Submit" value="Upload">
                </div>
            </div>
        </form><br>
    </div>
</div>

<!--Show Detail Software-->
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="thumbnail" style=" width:100%; height:150px; overflow: auto;">
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
                            <a href="<?php echo $path_sofwaremodel_download; ?>?download_id=<?php echo $row["software_id"]; ?>"><i class="fas fa-download"></i></a>
                        </td>
                        <td align="center">
                            <a href="<?php echo $path_sofwaremodel_delete; ?>?delete_id=<?php echo $row["software_id"]; ?>&delete_file=<?php echo $row["software_file"]; ?>" 
                            onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </form>
    </div>
</div>