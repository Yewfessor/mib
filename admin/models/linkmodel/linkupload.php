
<?php

        $link_name = $_POST["link_name"];
        $youtube = "https://www.youtube.com/embed/";
        $autoplay = "/videoseries?controls=0&autoplay=1&mute=1&amp;";
        $link_youtube = $youtube.$link_name.$autoplay;
        $date = date("Y-m-d H:i:s");

		include("../BaseModel.php");
		$sql = "INSERT INTO tb_link (link_name,adddate) VALUES ('" . $link_youtube . "','" . $date . "')";
		$result = mysqli_query($connection, $sql);
		Header("Location: ../../index.php");

?>