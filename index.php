<?php

function sum(string $a, string $b) {
  $result = [];

  if (strlen($a) > strlen($b)) {
    $max = $a;
    $min = $b;
  }
  else {
    $max = $b;
    $min = $a;
  }

  $l = strlen($max);
  $min = str_pad($min, $l - strlen($min), "0", STR_PAD_LEFT);

  $d = 0;
  for ($i = $l-1; $i>=0; $i--) {
    $step = $max[$i] + $min[$i] + $d;
    $result[] = $step % 10;
    $d = intdiv($step, 10);
  }
  if ($d) $result[] = $d;

  return implode('', array_reverse($result));
}
