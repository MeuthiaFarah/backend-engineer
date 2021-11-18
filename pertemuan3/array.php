<?php

# membuat array
$animals = ['kucing', 'ikan', 'burung'];

#mengakses array
echo $animals [2];
echo "<br>";


for ($i = 0; $i < count($animals); $i++) {
  if ("kucing" == $animals[$i]) {
    echo $i;
  }
}

echo "<br>";
// atau bisa juga pake search
echo array_search('burung', $animals);