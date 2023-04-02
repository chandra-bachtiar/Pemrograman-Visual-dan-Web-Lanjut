<?php

function nilaiAkhir(int $nilai)
{
    if ($nilai >= 80) {
        return "A";
    } elseif ($nilai >= 70) {
        return "B";
    } elseif ($nilai >= 60) {
        return "C";
    } elseif ($nilai >= 50) {
        return "D";
    } else {
        return "E";
    }
}

$totalNilai = nilaiAkhir(90);
var_dump($totalNilai);
