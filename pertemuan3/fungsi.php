<?php

function hitungLuasLingkaran ($jarijari) {
    $phi = 3.14;
    $luasLingkaran = $phi * $jarijari * $jarijari;
    return $luasLingkaran;
}

echo hitungLuasLingkaran(5);
echo "<br>";
echo hitungLuasLingkaran(9);
