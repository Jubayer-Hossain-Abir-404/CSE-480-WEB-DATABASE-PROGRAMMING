<?php
echo "<table border =\"1\" cellpadding='3px' cellspacing='0px'>";
	for ($i=1; $i <= 6; $i++) { 
		echo "<tr> \n";
        $c=$i;
		for ($j=1; $j <= 5; $j++) { 
		   $p = $i * $j;
           ++$c;
		   echo "<td>$j * $i = $p,$c</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>