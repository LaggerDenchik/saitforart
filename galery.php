<?php

    include("includs/db_connect.php");

?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/header.css" type="text/css">
        <link rel="stylesheet" href="css/galery.css" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;500&display=swap" rel="stylesheet">
        <title>Главная</title>
    </head>
    <body>

    <?php
    
    include("includs/header.php");

    ?>
    <?php
    $result = mysqli_query("SELECT * FROM works WHERE id = 1",$link);
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_array($result);
                do{
                    echo'
                    <link rel="shortcut icon" href="./logo/'.$row["logo"].'" type="image/png">
                    ';
                }
                while($row = mysqli_fetch_array($result));
            }
    ?>
    </body>
</html>