<?php

$num = 10;

if ($num > 10) {
  var_dump('Bigger');
}

if ($num > 10) {
  var_dump('Bigger');
} else {
  var_dump('Smaller');
}

if ($num > 10) {
  var_dump('Bigger');
} else if ($num < 10) {
  var_dump('Smaller');
} else {
  var_dump('Equal');
}

$day = (int)date('w');
$day = intval(date('w'));

if ($day === 0) {
  var_dump('Monday');
} elseif ($day === 1) {
  var_dump('Tuesday');
}

switch ($day) {
  case 0:
    var_dump('Monday');
    break;
  case 1:
    var_dump('Tuesday');
    break;
}
