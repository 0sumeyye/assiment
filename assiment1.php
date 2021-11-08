<table style="margin:auto;">
			<?php
		for ($row=1; $row<=8 ; $row++) { 
				echo "<tr>";
		for ($col=1; $col<=8 ; $col++) { 
					$t_cell = $row + $col;
			if ($t_cell % 2 == 0) {
 echo "<td style='border:1px solid; height:90px; width:90px; background-color:fff'>  </td>";
		} else {
			echo "<td style='border:1px solid; height:90px; width:90px; background-color:000'> </td>";


					}
				}
			}
			echo "</tr>";
			?>
		</table>
	
	