<!-- Youtube Links -->
<div class="upload-container">
    <form action="models/linkmodel/linkupload.php" method="post" name="upload_link">
        <h3 class="upload-heading">Youtube Link</h3>
        <div class="upload-form">
            <input type="text" name="link_name" id="link_name">
            <input type="submit" name="Submit" value="Upload">
        </div>
    </form>
</div>
<div class="table-container">

    <form name="show_link" method="post" action="models/linkmodel/linkshow.php">
        <table class="table-data">
            <thead>
                <tr>
                    <th width="15%">Video Youtube</th>
                    <th>options</th>
                </tr>
            </thead>
            <tbody>

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
                            <iframe src="<?php echo $row["link_name"]; ?>" frameborder="0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br><?php echo $row["adddate"]; ?>
                        </td>
                        <td align="center" bgcolor="#FFFFFF">

                            <?php
                            if ($hide >= 1) { ?>
                                <a href="models/linkmodel/linkshow.php?list_no=<?php echo $row["link_id"]; ?>&hidden_list=0"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            <?php
                            } elseif ($hide == 0) {
                            ?>
                                <a href="models/linkmodel/linkshow.php?list_no=<?php echo $row["link_id"]; ?>&show_list=1"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <?php
                            }
                            ?>
                            <?php
                            if ($hide_2 >= 1) { ?>
                                <a href="models/linkmodel/linkshow.php?list_no=<?php echo $row["link_id"]; ?>&hidden_list_2=0"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            <?php
                            } elseif ($hide_2 == 0) {
                            ?>
                                <a href="models/linkmodel/linkshow.php?list_no=<?php echo $row["link_id"]; ?>&show_list_2=1"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <?php
                            }
                            ?>
                            <a href="models/linkmodel/linkdelete.php?delete_id=<?php echo $row["link_id"]; ?>" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>

                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </form>

</div>