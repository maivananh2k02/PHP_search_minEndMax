<?php
function findMin($arr){
    $min=$arr[0];
    for ($i=0;$i<count($arr);$i++){
        if ($min>=$arr[$i]){
            $min=$arr[$i];
        }
    }
    return $min;
}
$arr=[1,6,10,52,35,68,74];
foreach ($arr as $value){
    echo $value.' ';
}
echo '<br>';
echo findMin($arr);
function findMax($arr){
    $max=$arr[0];
    for ($i=0;$i<count($arr);$i++){
        if ($max<$arr[$i]){
            $max=$arr[$i];
        }
    }
    return $max;
}
echo "<br>";
echo findMax($arr);


