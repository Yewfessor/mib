<?php
$path_basemodel = "models/BaseModel.php";
?>
<!-- Hero Slide -->

<div class="col-xs-12 col-sm-6 col-md-6">
    <div class="thumbnail">
        <h3>Slide Upload</h3>
        <form action="models/heromodel/heroupload.php" method="post" enctype="multipart/form-data" name="upload_hero">
            <div class="input-group">
                <span class="input-group-btn">
                    <button id="fake-file-button-browse" type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-file"></span>
                    </button>
                </span>
                <input type="file" name="fileupload[]" id="files-input-upload" style="display:none" multiple>
                <input type="text" id="fake-file-input-name" disabled="disabled" placeholder="File not selected" class="form-control">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default" disabled="disabled" id="fake-file-button-upload">
                        <i class="fas fa-upload"></i>
                    </button>
                </span>
            </div>
        </form>
    </div>

    <div class="thumbnail" style="height:270px; width:100%; overflow: auto;">
        <form name="show_hero" method="post" action="models/heromodel/heroshow.php">
            <table>
                <?php
                include $path_basemodel;
                $sql = "SELECT * FROM tb_hero ORDER BY adddate DESC";
                $result = mysqli_query($connection, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    $hide = $row["list_no"];
                    $hide_2 = $row["list_no_2"];
                ?>
                    <tr>
                        <td align="center">
                            <img width="350px"  height="245px" src="../assets/images/hero/<?php echo $row["hero_images"]; ?>" class="image-data">
                            <div class="col-xs-12"><?php echo $row["adddate"]; ?>&nbsp;
                                <?php
                                if ($hide >= 1) { ?>
                                    slide 1
                                    <a href="models/heromodel/heroshow.php?list_no=<?php echo $row["hero_id"]; ?>&hidden_list=0"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                    |
                                <?php
                                } elseif ($hide == 0) {
                                ?>
                                    slide 1
                                    <a href="models/heromodel/heroshow.php?list_no=<?php echo $row["hero_id"]; ?>&show_list=1"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    |
                                <?php
                                }
                                ?>
                                <?php
                                if ($hide_2 >= 1) { ?>
                                    slide 2
                                    <a href="models/heromodel/heroshow.php?list_no=<?php echo $row["hero_id"]; ?>&hidden_list_2=0"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                    |
                                <?php
                                } elseif ($hide_2 == 0) {
                                ?>
                                    slide 2
                                    <a href="models/heromodel/heroshow.php?list_no=<?php echo $row["hero_id"]; ?>&show_list_2=1"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    |
                                <?php
                                }
                                ?>
                                <a href="models/heromodel/herodelete.php?delete_id=<?php echo $row["hero_id"]; ?>&delete_img=<?php echo $row["hero_images"]; ?>" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </div>
                        </td>
                    <?php
                }
                    ?>
                    </tr>
                    
            </table>
        </form>
    </div>
</div>