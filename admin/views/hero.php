<div>
    <form action="models/heromodel/heroupload.php" method="post" enctype="multipart/form-data" name="upload_hero">
        <table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
            <tr align="center" bgcolor="#FFFFFF">
                <td align="center" colspan="2" bgcolor="#FFFFFF">
                    <p>Input Hero</p>
                </td>
            </tr>
            <tr>
                <td align="center" bgcolor="#FFFFFF"><input type="file" name="fileupload[]" id="fileupload" multiple></td>
                <td align="center" bgcolor="#FFFFFF"><input type="submit" name="Submit" value="Upload"></td>
            </tr>
        </table>
    </form>
</div>





<div>
    <form name="show_hero" method="post" action="models/heromodel/herodelete.php">
        <table width="500" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
            <tr>
                <td align="center" bgcolor="#FFFFFF" colspan="3"><strong>Hero-Image</strong></td>
            </tr>

            <tr>
                <td align="center" bgcolor="#FFFFFF">Select</td>
                <td align="center" bgcolor="#FFFFFF"><strong>Images</td>
                <td align="center" bgcolor="#FFFFFF" width="150px"><strong>Add-Date</strong></td>
            </tr>

            <?php
            include("models/BaseModel.php");
            $sql = "SELECT * FROM tb_hero";
            $result = mysqli_query($connection, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td align="center" bgcolor="#FFFFFF">
                        <input id="pict<?php echo $row["hero_images"]; ?>" name="checkbox[]" type="checkbox" value="<?php echo $row["hero_images"]; ?>">
                    </td>
                    <td align="center" bgcolor="#FFFFFF">
                        <label for="pict<?php echo $row["hero_images"]; ?>"><img width="200" src="../assets/images/hero/<?php echo $row["hero_images"]; ?>"></label>
                    </td>

                    <td align="center" bgcolor="#FFFFFF">
                        <?php echo $row["adddate"]; ?>
                    </td>
                </tr>
            <?php
            }
            ?>

            <tr>
                <td align="center" bgcolor="#FFFFFF" colspan="3"><input type="submit" value=" - ลบข้อมูล "></td>
            </tr>
        </table>
    </form>

    <?php
    include("models/BaseModel.php");
    $sql = "SELECT * FROM tb_hero Where list_no>'0' ";
    $result = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_array($result)) {
    ?>
        <tr>
            <td align="center" bgcolor="#FFFFFF">
                <label for="pict<?php echo $row["hero_images"]; ?>"><img width="200" src="../assets/images/hero/<?php echo $row["hero_images"]; ?>"></label>
            </td>
        </tr>
    <?php
    }
    ?>

  <form name="show_hero" method="post" action="models/heromodel/heroshow.php">
        <table width="500" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
            <tr>
                <td align="center" bgcolor="#FFFFFF" colspan="3"><strong>Hero-show</strong></td>
            </tr>

            <tr>
                <td align="center" bgcolor="#FFFFFF">Select</td>
                <td align="center" bgcolor="#FFFFFF"><strong>Images</td>
                <td align="center" bgcolor="#FFFFFF" width="150px"><strong>Add-Date</strong></td>
            </tr>

            <?php
            include("models/BaseModel.php");
            $sql = "SELECT * FROM tb_hero";
            $result = mysqli_query($connection, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td align="center" bgcolor="#FFFFFF">
                        <input id="pict<?php echo $row["hero_images"]; ?>" name="checkbox[]" type="checkbox" value="<?php echo $row["hero_images"]; ?>">
                    </td>
                    <td align="center" bgcolor="#FFFFFF">
                        <label for="pict<?php echo $row["hero_images"]; ?>"><img width="200" src="../assets/images/hero/<?php echo $row["hero_images"]; ?>"></label>
                    </td>

                    <td align="center" bgcolor="#FFFFFF">
                        <?php echo $row["adddate"]; ?>
                    </td>
                </tr>
            <?php
            }
            ?>

            <tr>
                <td align="center" bgcolor="#FFFFFF" colspan="3"><input type="submit" value=" select show "></td>
            </tr>
        </table>
    </form>
    

</div>