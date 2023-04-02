<?php

$first_name = "Chandra";
$last_name = "bachtiar";

$sayHi = function () use ($first_name, $last_name) {
    echo "Hi $first_name $last_name" . PHP_EOL;
};

$sayHi();
