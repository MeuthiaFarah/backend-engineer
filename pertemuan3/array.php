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

