<?php
echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($i=1; $i <= 10; $i++) { 
		echo "<tr> \n";
		for ($j=1; $j <= 10; $j++) { 
		   $p = $i * $j;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>