<?php

$nama = ["Rangga", "Ari", "sandi"];
var_dump($nama[0]);

$nama[0] = "Raga";
var_dump($nama);

unset($nama[1]);
var_dump($nama);

$nama[] = "Rangga";
var_dump($nama);
var_dump(count($nama));