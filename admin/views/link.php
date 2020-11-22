<!-- Youtube Links -->
<div class="col-xs-12 col-sm-6 col-md-6">
    <div class="thumbnail">
        <h3>Youtube Link</h3>
        <form action="models/linkmodel/linkupload.php" method="post" name="upload_link">
            <div class="input-group">
                <input class="form-control" type="text" name="link_name" id="link_name">
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
            <table class="table-data">
                <thead>
                    <tr>
                        <td align="center">Video Youtube</td>
                        <td align="center">options</td>
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
                            <td align="center">
                                <iframe src="<?php echo $row["link_name"]; ?>" frameborder="0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <br><?php echo $row["adddate"]; ?>
                            </td>
                            <td align="center">

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
</div>