<?php
$arr=['sex'=>1,'name'=>"Tom"];
$str=['age'=>18];
if(array_key_exists('age',$arr)){
    echo '存在age';
}else{
    var_dump($arr+$str);
}



