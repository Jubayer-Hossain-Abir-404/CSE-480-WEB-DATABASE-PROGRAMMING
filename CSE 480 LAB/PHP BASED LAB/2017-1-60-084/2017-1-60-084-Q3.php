<?php     
function the_bubble_Sort(&$arr) 
{ 
    $n = sizeof($arr); 
    for($i = 0; $i < $n; $i++)  
    { 
        for ($j = $n-1; $i<$j; $j--)  
        { 
            if ($arr[$j] < $arr[$j-1]) 
            { 
                $temp = $arr[$j]; 
                $arr[$j] = $arr[$j-1]; 
                $arr[$j-1] = $temp; 
            } 
        } 
    } 
} 
  
$a = array(100,70,90,50,40,20,30,10,60,80); 
  
$len = sizeof($a); 
the_bubble_Sort($a); 
  
echo "Descending order of elements : \n"; 
  
for ($i = 0; $i < $len; $i++) 
    echo $a[$i]." ";  
​
?> 
