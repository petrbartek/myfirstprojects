<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
   $myage >= "18";


    if($myage >= "16"){
        print "specs";
    }
    elseif($myage >="18"){
        print "mugs";
    }
    elseif($myage >= "21"){
        print "sausagerolls";
    }
    else {
        "you cannot buy anything";
    }
    ?>
</p>
</body>
</html>