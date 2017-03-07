<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
    $numberOfHobbits=2;

    switch($numberOfHobbits){
        case 1:
         echo "1 sad hobbit";
         break;
        case 2:
         echo " 2 happy hobbits";
         break;
        case 3:
         echo "3 hobbits are a crowd";
         break;
        default:
            echo "all the hobbits have gone home";
    }
   
    ?>
</p>
</body>
</html>