<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
    $wantedgood = "spec";
    $wantedgood = "mugs";
    $wantedgood = "sausagerolls";

    switch($wantedgood){
        case "spec":
         echo "you have to be 16 to buy specs";
         break;
        case "mugs":
         echo "you have to be 18 to buy mugs ";
         break;
        case "sausagerolls";
         echo "you have to be 21 to buy";
        default:
            echo "  enjoy  ";
    }
   
    ?>
</p>
</body>
</html>