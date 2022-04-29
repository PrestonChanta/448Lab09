<?php
  function multiply($x, $y) 
  {
    $z = $x * $y;
    return $z; 
  }


  echo '<table style="border: 1px solid black;"> <tr> <td> </td>';
  for($i=1; $i <= 100; $i++)
  {
    echo "<td>$i </td>";
  }
  echo "</tr>";

  for($i=1; $i <= 100; $i++)
  {
    echo "<tr> <td>$i </td>";
    for($j=1; $j <= 100; $j++)
    {
      echo "<td>" . multiply($i,$j) .  "</td>";
    }
    echo "</tr>";
  }
  echo '</table';
?>