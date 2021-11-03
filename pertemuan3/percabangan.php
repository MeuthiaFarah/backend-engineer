<?php

// jika nilai diatas 90 = A
// jika nilai diatas 80 = B
// jika nilai diatas 70 = C
// selain itu = D

$nilai = 95;

// buat kondisi
if ($nilai > 90) {
    echo "A";
} else if ($nilai > 80) {
    echo "B";
} else if ($nilai > 70) {
    echo "C";
} else {
    echo "D";
}