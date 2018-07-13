<?php
$arr=['red','blue','origin'];
$str=array_map('strtoupper',$arr);
var_dump($str);
// $str1=array_change_key_case($arr,CASE_UPPER);
foreach($arr as $k => $v){
    $arr[$k]=strtoupper($v);
}
var_dump($arr);
?>