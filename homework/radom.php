<?php
function GetRand($length){
    $str='123456789';
    $len=strlen($str)-1;
    $randstr='';
    for($i=0;$i<$length;$i++){
        $num=mt_rand(0,$len);
        $randstr .=$str[$num];
    }
    return $randstr;
}
$number=GetRand(5);
echo ceil($number/1024);

