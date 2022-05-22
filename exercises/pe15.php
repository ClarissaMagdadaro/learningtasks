<?php
$favorite_fruit = (isset($_GET['fruit']) && $_GET['fruit'] != '') ? $_GET['fruit'] : '';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP demo</title>
    </head>
    <body>
        <?php
            $favorite_fruit = " "; //Other options Grapes, Strawberry
            Switch($favorite_fruit){
                case"Apple";
                     echo"<h1>Your favorite fruit is $favorite_fruit</h1>";
                break;
               case"Grapes";
                     echo"<h1>Your favorite fruit is $favorite_fruit</h1>";
                break;
               case"Stra";
                     echo"<h1>Your favorite fruit is $favorite_fruit</h1>";
                break;
                default;
                     echo"<h1>Your favorite fruit is not on the list.</h1>";
                break;
            }
        ?>
    </body>
</html>