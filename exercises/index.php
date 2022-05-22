<?php
$page = (isset($_GET['page']) && $_GET ['page'] !='') ? $_GET['page'] : '';
?>
<!DOCTYPE html>
<html>
    <head>
        <title> PHP demo </title>
    </head>
    <body>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php?page=red">Red page</a></li>
        <li><a href="index.php?page=green">Green page</a></li>
        
    </ul>
        <?php
           switch($page){
               case "red":
                   include "page-red.php";
                break;
               case "green";
                   include "page-green.php";
                break;
               default:
                   include "default.php";
                break;
           }
        ?>
    </body>
</html>