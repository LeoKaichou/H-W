<?php
$num = 17;
$flag = 1; 

if ($num < 2) {
    $flag = 0; 
}

for ($i = 2; $i<=$num/2;$i++){
    if ($num % $i == 0) {
        $flag = 0;
        break;
    }
}

if ($flag == 1) {
    echo "$num is a prime number.";
} else {
    echo "$num is not a prime number.";
}
?>
