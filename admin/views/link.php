<div>
    <form action="models/linkmodel/linkupload.php" method="post" name="upload_link">
        <table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
            <tr align="center" bgcolor="#FFFFFF">
                <td align="center" colspan="2" bgcolor="#FFFFFF">
                    <p>Input Link Youtube</p>
                </td>
            </tr>
            <tr>
                <td align="center" bgcolor="#FFFFFF"><input type="text" name="link_name" id="link_name"> <input type="submit" name="Submit" value="Upload"></td>
            </tr>
        </table>
    </form>
</div>



<form name="show_link" method="post" action="models/linkmodel/linkshow.php">
    <div style=" width:100%; height:425px; overflow: auto;">

        <table width="500" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
            <tr>
                <td align="center" bgcolor="#FFFFFF" colspan="6"><strong>Link Youtube</strong></td>
            </tr>
            <tr>
                <td align="center" bgcolor="#FFFFFF"><strong>Link Youtube</td>
                <td align="center" bgcolor="#FFFFFF" width="150px">Video 1</td>
                <td align="center" bgcolor="#FFFFFF" width="150px">Video 2</td>
                <td align="center" bgcolor="#FFFFFF" width="150px"><strong>Delete</strong></td>

            </tr>

            <?php
            include("models/BaseModel.php");
            $sql = "SELECT * FROM tb_link ORDER BY adddate DESC";
            $result = mysqli_query($connection, $sql);
            while ($row = mysqli_fetch_array($result)) {
                $hide = $row["list_no"];
                $hide_2 = $row["list_no_2"];
            ?>
                <tr>
                    <td align="center" bgcolor="#FFFFFF">
                        <iframe width="400" height="200" src="<?php echo $row["link_name"]; ?>" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <?php echo $row["adddate"]; ?>
                    </td>
                    <?php
                    if ($hide >= 1) { ?>
                        <td align="center" bgcolor="#FFFFFF">
                            <a href="models/linkmodel/linkshow.php?list_no=<?php echo $row["link_id"]; ?>&hidden_list=0">hidden</a>
                        </td>
                    <?php
                    } elseif ($hide == 0) {
                    ?>
                        <td align="center" bgcolor="#FFFFFF">
                            <a href="models/linkmodel/linkshow.php?list_no=<?php echo $row["link_id"]; ?>&show_list=1">show</a>
                        </td>
                    <?php
                    }
                    ?>
                    <?php
                    if ($hide_2 >= 1) { ?>
                        <td align="center" bgcolor="#FFFFFF">
                            <a href="models/linkmodel/linkshow.php?list_no=<?php echo $row["link_id"]; ?>&hidden_list_2=0">hidden</a>
                        </td>
                    <?php
                    } elseif ($hide_2 == 0) {
                    ?>
                        <td align="center" bgcolor="#FFFFFF">
                            <a href="models/linkmodel/linkshow.php?list_no=<?php echo $row["link_id"]; ?>&show_list_2=1">show</a>
                        </td>
                    <?php
                    }
                    ?>
                    <td align="center" bgcolor="#FFFFFF">
                        <a href="models/linkmodel/linkdelete.php?delete_id=<?php echo $row["link_id"]; ?>" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')">ลบ</a>
                    </td>

                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</form>