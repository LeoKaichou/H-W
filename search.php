<?php 
    $a = [1,2,3];
    $b=2;
    $flag=0;
    for($i=0;$i<count($a);$i++){
        if($a[$i]===$b)
        {
            $flag=1;
            break;
        }
        else{
            $flag=0;
        }
    }
    if($flag==1){
        echo "No. is present";
    }
    else{
        echo "No. is not present";
    }
?>