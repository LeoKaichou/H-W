<?php
    $a=[1,2,3,4];
    $large=0;
    $small=0;
    for($i=0;$i<count($a);$i++){
        if($large<$a[$i])
        {
            $large =$a[$i];
        }
        if($small>$a[$i]){
            $small=$a[$i];
        }
    }
    ?>