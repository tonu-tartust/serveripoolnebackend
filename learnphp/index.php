<?php
$test = array(1, 2, 3);
$test = [1, 2, 3];
$test = [1, 'sdsds', true, [1, 2, 3]];
$test = [
  'name' => 'tonu',
  'age' => 33,
  3,
  'sdsds',
  true,
  100 => 'lol',
  'troll',
];

var_dump($test['name']);
array_push($test, 'added', 'dwdwdw', 3);
$test[] = 'new value';
$test['name'] = 'bob';
$test[1] = 99999;
unset($test[3]);
var_dump($test);
