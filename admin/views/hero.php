<?php
$path_basemodel = "models/BaseModel.php";
?>
<!-- Hero Slide -->
<div class="upload-container">
    <h3 class="upload-heading">Big Slide Upload</h3>
    <div class="upload-form">
        <form action="models/heromodel/heroupload.php" method="post" enctype="multipart/form-data" name="upload_hero">
            <input type="file" name="fileupload[]" id="fileupload" multiple>
            <input type="submit" name="Submit" value="Upload">
        </form>
    </div>
</div>

<div class="table-container">
    <form name="show_hero" method="post" action="models/heromodel/heroshow.php">
        <table class="table-data">
            <thead>
                <tr>
                    <th>Images</th>
                    <th>options</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include $path_basemodel;
                $sql = "SELECT * FROM tb_hero ORDER BY adddate DESC";
                $result = mysqli_query($connection, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    $hide = $row["list_no"];
                    $hide_2 = $row["list_no_2"];
                ?>

                    <tr>
                        <td align="center" bgcolor="#FFFFFF">
                            <img width="200" src="../assets/images/hero/<?php echo $row["hero_images"]; ?>" class="image-data"><br>
                            <?php echo $row["adddate"]; ?>
                        </td>
                        <td align="center" bgcolor="#FFFFFF">

                            <?php
                            if ($hide >= 1) { ?>
                                <a href="models/heromodel/heroshow.php?list_no=<?php echo $row["hero_id"]; ?>&hidden_list=0"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            <?php
                            } elseif ($hide == 0) {
                            ?>
                                <a href="models/heromodel/heroshow.php?list_no=<?php echo $row["hero_id"]; ?>&show_list=1"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <?php
                            }
                            ?>
                            <?php
                            if ($hide_2 >= 1) { ?>
                                <a href="models/heromodel/heroshow.php?list_no=<?php echo $row["hero_id"]; ?>&hidden_list_2=0"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            <?php
                            } elseif ($hide_2 == 0) {
                            ?>
                                <a href="models/heromodel/heroshow.php?list_no=<?php echo $row["hero_id"]; ?>&show_list_2=1"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <?php
                            }
                            ?>
                            <a href="models/heromodel/herodelete.php?delete_id=<?php echo $row["hero_id"]; ?>&delete_img=<?php echo $row["hero_images"]; ?>" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    <?php
                }
                    ?>
                    </tr>
            </tbody>
        </table>
    </form>
</div>