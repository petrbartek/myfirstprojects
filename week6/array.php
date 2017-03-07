<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
    $provisionedActivity=array("specs","mugs","sausagerolls");//declares the array

    echo $provisionedActivity[0]; //outputs "specs"

    $provisionedActivity[1]= "hugs";//changes mugs to hugs

    unset($provisionedActivity[2]);//removes susagerolls

foreach($provisionedActivity as $x){
        print "<p>$x</ p>";
 }
    ?>
</p>
</body>
</html>