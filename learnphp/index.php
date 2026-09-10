<?php

$test = function(){
  var_dump('shh');
}

var_dump($test);

$test();
call_user_func($test);

$numbers = [1,2,3,4,5];

$squares = array_map(function ($n){
  return $n*$n;
}, $numbers);

$squares = array_map(fn ($n)=> $n*$n, $numbers);
var_dump($squares)
