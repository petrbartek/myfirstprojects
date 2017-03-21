<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
   $myage = "18";


    if($myage >= "16"){
        print "you can buy specs only";
    }
    elseif($myage >="18"){
        print "you can buy mugs";
    }
    elseif($myage >= "21"){
        print "you ca buy sausagerolls";
    }
    else {
       print "you cannot buy anything";
    }
    ?>
</p>
</body>
</html>