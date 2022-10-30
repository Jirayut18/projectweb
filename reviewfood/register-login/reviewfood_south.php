<?php
// $keyword = $_GET["keyword"];
$conn =mysqli_connect("localhost", "root", "", "reviewfood");
if ($conn) {
    mysqli_select_db($conn,"reviewfood");
    mysqli_query($conn,"SET NAMES utf8");
} else {
    echo mysql_errno(); 
}

    $sql = "SELECT * FROM detail_review_food WHERE foodregion='south'";
    $objQuery = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($objQuery))
    {
        ?>
        <img src="img_food/<?=$row["food_id"]?>.jpg" height ='200'><br>
        foodregion:<?=$row["foodregion"]?><br>
        foodname:<?=$row["foodname"]?><br>
        fooddetail:<?=$row["fooddetail"]?><br><hr>
        
        <?php
    }
 
?>