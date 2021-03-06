<!-- Youtube Links -->
<div class="col-xs-12 col-sm-6 col-md-6">
<h1 id="slide-image">Manage Video</h1><br>

    <div class="thumbnail">
        <h3>Youtube Link</h3>
        <form action="models/linkmodel/linkupload.php" method="post" name="upload_link">
            <div class="input-group">
                <input class="form-control" type="text" name="link_name" id="link_name" required placeholder="รูปแบบลิงค์ : https://youtu.be/xxx">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="fas fa-upload"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="thumbnail" style="height:270px; width:100%; overflow: auto;">
        <form name="show_link" method="post" action="models/linkmodel/linkshow.php">
            <table>
                <?php
                include("models/BaseModel.php");
                $sql = "SELECT * FROM tb_link ORDER BY adddate DESC";
                $result = mysqli_query($connection, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    $hide = $row["list_no"];
                    $hide_2 = $row["list_no_2"];
                ?>
                    <tr>
                        <td align="center">
                            <iframe width="350px" height="240px" src="<?php echo $row["link_name"]; ?>"></iframe>
                            <div class="col-xs-12"><?php echo $row["adddate"]; ?>&nbsp;
                                <?php
                                if ($hide >= 1) {   
                                    ?>
                                    Slide 3
                                    <a href="models/linkmodel/linkshow.php?list_no=<?php echo $row["link_id"]; ?>&hidden_list=0"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    |
                                   
                                <?php
                                } elseif ($hide == 0) {
                                ?>
                                
                                    Slide 3
                                    <a href="models/linkmodel/linkshow.php?list_no=<?php echo $row["link_id"]; ?>&show_list=1"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                    |
                                <?php
                                }
                                ?>
                                <?php
                                if ($hide_2 >= 1) { ?>
                                    Slide 4
                                    <a href="models/linkmodel/linkshow.php?list_no=<?php echo $row["link_id"]; ?>&hidden_list_2=0"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    |
                                <?php
                                } elseif ($hide_2 == 0) {
                                ?>
                                    Slide 4
                                    <a href="models/linkmodel/linkshow.php?list_no=<?php echo $row["link_id"]; ?>&show_list_2=1"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                    |
                                <?php
                                }
                                ?>
                                <a href="models/linkmodel/linkdelete.php?delete_id=<?php echo $row["link_id"]; ?>" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </div>
                        </td>
                    </tr>
                <?php
                             

                }

                ?>
            </table>
        </form>
    </div>
</div>