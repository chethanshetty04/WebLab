<?php
$arr1=array(
    array(1,2,9),
    array(3,4,9),
    array(5,6,9)
);
$arr2=array(
    array(7,2,9),
    array(7,4,9),
    array(7,6,9)
);
$result=array();
for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        $result[$i][$j]=$arr1[$i][$j]+$arr2[$i][$j];
    }
}
echo "Addition of two matrices is:<br/>";
for($i=0;$i<3;$i++){
    echo"<br>";
    for($j=0;$j<3;$j++){
        echo" ".$result[$i][$j];
    }
}
?>