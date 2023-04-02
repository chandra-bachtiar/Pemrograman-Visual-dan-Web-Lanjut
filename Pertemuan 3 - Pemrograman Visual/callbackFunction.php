<?php

function sayHi(string $name, callable $filter)
{
    $fullName = call_user_func($filter, $name);
    echo "Hi $fullName" . PHP_EOL;
}

sayHi("Chandra", "strtolower");
sayHi("Chandra", "strtoupper");
