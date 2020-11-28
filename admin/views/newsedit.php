<?php
//get
$news_id = $_GET['edit_id'];

//path
$path_basemodel     = "../models/BaseModel.php";
$path_edit          = "../models/newsmodel/newsedit.php";
$path_images        = "../../assets/images/news/";

//sql
include $path_basemodel;
$sql    = "SELECT * FROM tb_news WHERE news_id = '" . $news_id . "'";
$result = mysqli_query($connection, $sql);
$row    = mysqli_fetch_assoc($result);

//row
$news_id                = $row["news_id"];
$news_image             = $row["news_image"];
$news_name              = $row["news_name"];
$news_detail_th         = $row["news_detail_th"];
?>

<!--Upload Detail Product-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!--bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--bootstrap -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- ckeditor-->
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <!-- jquery-->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="thumbnail">
        <br><br>
        <form class="form-horizontal" action="<?php echo $path_edit; ?>" id="newsedit" enctype="multipart/form-data" name="newsedit" method="post">
            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-8" align="left">
                    หัวข้อข่าว
                    <input class="form-control" type="text" name="news_name" id="news_name" value="<?php echo $news_name; ?>" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-8" align="left">
                    รายละเอียด
                    <textarea class="ckeditor" cols="69" rows="5" name="news_detail_th" id="news_detail_th"><?php echo $news_detail_th; ?></textarea>
                </div>
            </div>
            <!-- hidden -->
            <div class="form-group">
                <div class="col-sm-2" align="right"></div>
                <div class="col-sm-7" align="left">
                    ไฟล์ประกอบ<br>
                    <img class="thumbnail" width="200" src="<?php echo $path_images . $news_image; ?>"><br>
                    <input type="file" name="news_image_new" id="news_image_new" value="">
                    <!-- hidden -->
                    <input type="text" name="news_id" id="news_id" value="<?php echo $news_id; ?>" hidden>
                    <input type="text" name="news_image" id="news_image" value="<?php echo $news_image; ?>" hidden>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"> </div>
                <div class="col-sm-8" align="right">
                    <input class="btn btn-danger" type="button" onclick="history.back();" name="newsback" value="Cancel">
                    <input class="btn btn-primary" type="submit" name="newssubmit" value="Done">
                </div>
            </div>
        </form>
    </div>
</div>