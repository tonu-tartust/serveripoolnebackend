<?php

function hello(): void
{
  var_dump('Hello');
}

var_dump(hello());
hello();

function helloName($name = 'nameless', $age)
{
  var_dump("Hello, $name! You are $age years old!");
}

helloName('tonu', 30);

function square(int $a): int
{
  if ($a < 0) {
    return 0;
  }
  return $a * $a;
}

$answer = square(2);
var_dump($answer);
var_dump(square(4));

function recursion($i)
{
  if ($i < 10) {
    var_dump($i);
    recursion(++$i);
  }
}

recursion(0);
