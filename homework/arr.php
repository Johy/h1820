<?php
//join implode
$arr=[["Tom","Jerry","Jack","Rose"],["Tom","Jerry","Jack","Rose"],["Tom","Jerry","Jack","Rose"]];
$arr1=[];
foreach($arr as $i){
    array_push($arr1,join($i));
}
print_r($arr1);
?>