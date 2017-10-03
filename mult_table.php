<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

  function mult($x, $y) {
    $z = $x * $y;
    return $z;
  }
echo '<table>';
  for ($i = 1; $i < 101; $i++) {
    echo '<tr>';
    for($j = 1; $j < 101; $j++) {
      echo '<td>' . mult($i, $j) . '</td>';
    }
    echo "</tr>";
  }
echo '</table>';
?>
