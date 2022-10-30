<?php
session_start();
require_once('connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    
    <title>Document</title>
</head>

<body>
    <header>
        <img class="logo" src="img/image.png" alt="logo" width="50" height="50">
        <nav>
            <ul class="ul_link">
                <li><a href="reviewfood_north.php">ภาคเหนือ</a></li>
                <li><a href="reviewfood_middle.php">ภาคกลาง</a></li>
                <li><a href="reviewfood_south.php">ภาคใต้</a></li>
                <li><a href="reviewfood_esan.php">ภาคอีสาน</a></li>
            </ul>
        </nav>
        <nav>
            <ul class="ul_link">
                <li><a href="register_form.php" class="btn-logout">สมัครสมาชิก</a></li>
                <li><a href="login_form.php" class="ul_link">ล็อคอิน</a></li>
        </ul>
        </nav>
    </header>
    <section>
    <form action="search.php" class="Search" method="POST" >
        <input type="text" name="foodname" placeholder="ชื่ออาหาร" pattern="[ก-๏\s]{1,}">
        <input type="submit" name="search" value="ค้นหา">
    </form>
    </section>



       
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>สำหรับผู้ใช้ JAME</h4>
                    <li>เกี่ยวกับ JAME</li>
                    <li>ตารางอันดับผู้ใช้งาน</li>
                    <li>แนวทางปฎิบัติของผู้ใช้งาน</li>
                </div>
                <div class="footer-col">
                    <h4>สำหรับร้านหรือธุรกิจ</h4>
                    <li>แจ้งเป็นเจ้าของร้าน</li>
                    <li>ลงโฆษณากับ JAME</li>
                    <li>บทความเทคนิคทางการตลาด</li>
                </div>
                <div class="footer-col">
                    <h4>เกี่ยวกับ</h4>
                    <li>ติดต่อเรา</li>
                    <li>ศูนย์ช่วยเหลือ</li>
                </div>
                <div class="footer-col">
                    <h4>Follow us</h4>
                    <img class="facebook" src="img/fb.png" alt="facebook" width="30" height="30">
                    <img class="line" src="img/line.png" alt="line" width="30" height="30">
                    <img class="twitter" src="img/twitter.png" alt="twitter" width="30" height="30">
                    <img class="instagram" src="img/instagram.png" alt="instagram" width="30" height="30">
                    <img class="youtube" src="img/youtube.png" alt="youtube" width="30" height="30">
                </div>
            </div>
        </div>
    </footer>
</body>

</html>