<?php
function sankaku($x, $y)
{
  $d = $x * $y / 2;
  return($d);
}

function sikaku($x, $y)
{
  $d = $x * $y;
  return($d);
}

function daikei($x1, $x2, $y)
{
  $d = (($x1 + $x2) / 2)  * $y;
  return($d);
}

$d = sankaku(3,2);
echo $d . "<br />";

$d = sikaku(4,2);
echo $d . "<br />";

$d = daikei(5,6,2);
echo $d . "<br />";
