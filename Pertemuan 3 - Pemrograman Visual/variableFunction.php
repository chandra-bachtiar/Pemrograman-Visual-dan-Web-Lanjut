<?php

function foo()
{
    echo "In foo" . PHP_EOL;
}

function bar()
{
    echo "In bar" . PHP_EOL;
}

$callFunction = "foo";
$callFunction();

$callFunction = "bar";
$callFunction();

#contoh lain
function sayHello(string $name, $filter)
{
    $fullName = $filter($name);
    echo "hi $fullName" . PHP_EOL;
}

function sampleName(string $name): string
{
    return "My Name is $name";
}

sayHello("Chandra", "strtoupper");
sayHello("Chandra", "strtolower");
