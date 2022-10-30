<?php include 'connect.php' ?>
<table border="1"><tr><th>Username</th><th>password</th><th>name</th><th>age</th><th>gender</th><th>address</th><th>email</th><th>phone</th></tr>
    <html>
    <head><meta charset="utf-8"></head>
    <body>
    <?php
    $sql = $pdo->prepare("SELECT * From detail_user");
    $sql->execute();

    while ($row = $sql->fetch()) {
    ?>
    <tr><td><?=$row ["username"]?></td>
    <td><?=$row ["password"]?></td>
    <td><?=$row ["name"]?></td>
    <td><?=$row ["age"]?></td>
    <td><?=$row ["gender"]?></td>
    <td><?=$row ["address"]?></td>
    <td><?=$row ["email"]?></td>
    <td><?=$row ["phone"]?></td></tr>
    <?php } ?>
    </body>
    </html>
    </table>
    <br>


    <table border="1"><tr><th>Restaurant_name</th><th>Restaurant_Address</th><th>Restaurant_favorite</th><th>Promote_Name</th><th>Timeopen</th></tr>
    <html>
    <head><meta charset="utf-8"></head>
    <body>
    <?php
    $sql = $pdo->prepare("SELECT * From detail_restaurant");
    $sql->execute();
    
    while ($row = $sql->fetch()) {
    ?>
    <tr>
    <td><?=$row ["restaurant_name"]?></td>
    <td><?=$row ["restaurant_address"]?></td>
    <td><?=$row ["restaurant_favorite"]?></td>
    <td><?=$row ["promote_name"]?></td>
    <td><?=$row ["timeopen"]?></td>
    </tr>
    
    <?php } ?>
    </body>
    </html>
    </table>
    <br>

    <table border="1"><tr><th>FoodName</th><th>impressed</th><th>FoodRegion</th><th>price</th><th>foodimg</th></tr>
    <html>
    <head><meta charset="utf-8"></head>
    <body>
    <?php
    $sql = $pdo->prepare("SELECT * From detail_review_food");
    $sql->execute();
    
    while ($row = $sql->fetch()) {
    ?>
    <tr>
    <td><?=$row ["foodname"]?></td>
    <td><?=$row ["impressed"]?></td>
    <td><?=$row ["foodregion"]?></td>
    <td><?=$row ["price"]?></td>
    <td><?=$row ["foodimg"]?></td>
    </tr>
    
    <?php } ?>
    </body>
    </html>
    </table>
    <br>




