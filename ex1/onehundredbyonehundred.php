<?php 
function atimesb($a, $b) {
    return ($a * $b);
}

echo "<table>";

for ($i = 0; $i <= 100; $i++)
{
    echo "<tr>";
        for($j = 0; $j <= 100; $j++)
        {
            if (($i==0) && ($j==0))
            {
                echo "<td><b>C/R </td>";

                //moves on from zero to one cuz otherwise the column will display zero and have the last one empty
                continue;
            }

            // when the column
            if ($j==0) 
            {
                //. is a string concate...
                //HAD TO LOOK IT UP!!!
                // why doesnt it just use + ????? WHYYYYYYYY????? WHAT IS THIS???? JANK!!!!
                echo "<td><b>".$i."</td>";
            }
            //when the row
            else if ($i==0) 
            {
                echo "<td><b>".$j."</td>";
            }
            //print numbers onto the table
            else 
            {
                echo "<td>".atimesb($i, $j)."</td>";
            }
        }
    echo "</tr>";
}
echo "</table>";
?>