<?php
echo "<table>";
for($x =0; $x <= 100; $x++)
{
	echo "<tr>";
	for($i =0; $i <= 100; $i++)
	{
		if($i == 0 && $x == 0)
		{
			echo "<th></th>";
		}
		else if ($x == 0)
		{
			echo "<th>$i</th>";
		}
		else if ($i == 0)
		{
			echo "<th>$x</th>";
		}
		else
		{
			echo "<td>" . $i * $x . "</td>";
		}
	}
	echo "</tr>";
}
echo "</table>";

?>
