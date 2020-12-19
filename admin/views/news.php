<?php
//path
$path_basemodel = "models/BaseModel.php";
$path_input     = "models/newsmodel/newsinput.php";
$path_delete    = "models/newsmodel/newsdelete.php";
$path_edit      = "views/newsedit.php";
$path_images    = "../assets/images/news/";
?>
<div class="col-xs-12 col-sm-12 col-md-12" id="news">
    <h1 id="slide-product">Manage News</h1><br>
    <div class="thumbnail">
        <div class="" align="center">
            <h3>เพิ่มข่าว</h3>
        </div>
        <form class="form-horizontal" action="<?php echo $path_input; ?>" id="productinput" enctype="multipart/form-data" name="newsinput" method="post">

            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-8" align="left">
                    หัวข้อข่าว
                    <input class="form-control" type="text" name="news_name" id="news_name" value="" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-8" align="left">
                    รายละเอียด
                    <textarea class="ckeditor" cols="69" rows="5" name="news_detail_th" id="news_detail_th"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-7" align="left">
                    ภาพประกอบ
                    <input type="file" name="news_image" id="news_image" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"> </div>
                <div class="col-sm-8" align="right">
                    <input class="btn btn-primary" type="submit" name="newssubmit" value="บันทึก">
                </div>
            </div>
        </form>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 News_Search">
    <form class="form-inline" name="searchformnews" id="searchformnews">
        <div class="form-group ">
            <label for="textsearch">Search&nbsp;</label>
            <input type="text" name="newsall" id="newsall" class="form-control" placeholder="News ID!" autocomplete="off">
        </div>
        <button type="button" class="btn btn-primary" id="btnSearchnews">
            <span class="glyphicon glyphicon-search"></span>
            ค้นหา
        </button>
    </form>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div id="list-datanews" style="margin-top: 10px;">
        <div class="thumbnail" style="height:270px; width:100%; overflow: auto;">
            <?php
            include $path_basemodel;
            $sql = "SELECT * FROM tb_news ORDER BY lastupdate DESC limit 10";
            $result = mysqli_query($connection, $sql);
            ?>
            <form>
                <table border="0" cellpadding="3" cellspacing="1" width="100%">
                    <tr align="center">
                        <td align="center"><strong>News ID</strong></td>
                        <td align="center"><strong>Image</strong></td>
                        <td align="center"><strong>Topic</strong></td>
                        <td align="center"><strong>Detail</strong></td>
                        <td align="center" colspan="2"><strong>Option</strong></td>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr align="center" height="150px">
                            <td><?php echo $row["news_id"] ?></td>
                            <td><img height="100" src="<?php echo $path_images . $row["news_image"]; ?>"></td>
                            <td><?php echo $row["news_name"]; ?></td>
                            <td><?php echo $row["news_detail_th"]; ?><br><?php echo "วันที่ :" . $row["adddate"] . " แก้ไข : " . $row["lastupdate"]; ?></td>
                            <td><a href="<?php echo $path_edit . "?edit_id=" . $row["news_id"]; ?>"><i class="fas fa-edit"></i></a></td>

                            <td><a href="<?php echo $path_delete . "?delete_id=" . $row["news_id"]; ?>
                            &delete_img=<?php echo $row["news_image"]; ?>" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')">
                                    <i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        </tr>
                    <?php
                    }
                    mysqli_close($connection);

                    ?>
                </table>
            </form>
        </div>
    </div>
</div>
