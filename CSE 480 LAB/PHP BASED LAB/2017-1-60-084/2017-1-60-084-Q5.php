<?php

function RemoveSpecialChar($str) {


    $res = str_replace( array( '!', '@',
    '#' , '$', '%', '^','&','*','-','_','=','+', '\'','<','>','?','/' ), ' ', $str);


    return $res;
    }


$str = "All ! $ users * are - _ + you are <Special> X# = My ***";


$str1 = RemoveSpecialChar($str);


echo $str1;
?>
