<!--Show On Index-->
<?php
$path_basemodel                 = "models/BaseModel.php";
$path_software                  = "../assets/software/";
$path_manual                    = "../assets/manual/";
$path_manualupload              = "views/softwaremanual.php";
$path_sofwaremodel_upload       = "models/softwaremodel/softwareupload.php";
$path_sofwaremodel_delete       = "models/softwaremodel/softwaredelete.php";
$path_sofwaremodel_manual       = "models/softwaremodel/manualupload.php";
$path_sofwaremodel_manual_delete  = "models/softwaremodel/manualdelete.php";



?>

<!--Upload Detail Software-->
<div class="col-xs-12 col-sm-12 col-md-12" id="software">
 <br>

    <div class="thumbnail">
        <div class="" align="center">
            <h3>อัพโหลด คู่มือ</h3>
        </div>
        <form class="form-horizontal" action="<?php echo $path_sofwaremodel_manual; ?>" method="post" enctype="multipart/form-data" name="upload_software">
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
                    ไฟล์ประกอบ <font color="red">(ขนาดไฟล์ไม่เกิน 50 MB)</font>
                    <input type="file" name="manualupload" id="manualupload" require>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"> </div>
                <div class="col-sm-8" align="right">
                    <input class="btn btn-primary" type="submit" name="Submit" value="อัพโหลด">
                </div>
            </div>
        </form><br>
    </div>
</div>

<!--Show Detail Software-->
<div class="col-xs-12 col-sm-12 col-md-12" id="manual">
    <div class="thumbnail" style=" width:100%; height:150px; overflow: auto;">
        <form>
            <table cellpadding="3" cellspacing="1" width="100%">
                <tr>
                    <td align="center"><strong>ชื่อไฟล์</strong></td>
                    <td align="center"><strong>ประเภท</strong></td>
                    <td align="center"><strong>หมวดหมู่</strong></td>
                    <td align="center" colspan="2"><strong>จัดการ</strong></td>
                </tr>
                <?php
                include $path_basemodel;
                $sql = "SELECT  software_id,
                                software_name,
                                software_manual,
                                software_type_name,
                                product_type_name,
                                software_file
                    FROM tb_software 
                    LEFT JOIN tb_product_type 
                    ON tb_software.product_type_id = tb_product_type.product_type_id 
                    LEFT JOIN tb_software_type
                    ON tb_software.software_type_id = tb_software_type.software_type_id where software_file = ''";
                $result = mysqli_query($connection, $sql);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td align="center"><?php echo $row["software_name"]; ?></td>
                        <td align="center"><?php echo $row["software_type_name"]; ?></td>
                        <td align="center"><?php echo $row["product_type_name"]; ?></td>
                        <td align="center">
                            <a href="<?php echo $path_manual . $row["software_manual"]; ?>" download><i class="fas fa-file-download"></i></a>
                            &nbsp;
                            <a href="<?php echo $path_sofwaremodel_manual_delete; ?>?delete_id=<?php echo $row["software_id"]; ?>&delete_file=<?php echo $row["software_manual"]; ?>" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </form>
    </div>
</div>