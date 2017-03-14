<?php
$items = array ("specs", "mugs", "sausages");

for ($day = 1; $day <=30;$day++) {
    echo $day."</br>";
    if ($day % 2 == 0){
     echo "specs on sale today <br>";
    }
    if ($day % 3 == 0){
        echo "mugs on sale today <br>";
    }
    if ($day % 4 == 0){
        echo "sausages on sale today <br>";
    }
    
}
?>