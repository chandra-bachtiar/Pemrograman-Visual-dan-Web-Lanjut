<?php

$nama = ["Chandra", "Ganteng", "Bachtiar"];
var_dump($nama[0]);

$nama[0] = "Chand";
var_dump($nama);

unset($nama[1]);
var_dump($nama);

$nama[] = "Chandra";
var_dump($nama);
var_dump(count($nama));
