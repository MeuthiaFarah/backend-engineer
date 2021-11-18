<?php
// jenis looping dasar
// for = looping kondisi yang sudah ditentukan
// while = looping selama kondisi true
// foreach = looping array

// menampilkan angka 0-9
# ada 3 statement
# statement pertama = nilai awal
# statement kedua = batasan looping (finish)
# statement ketiga = buat penambahan, bisa diganti $i++ untuk penambahan 1
for ($i = 0; $i < 10; $i = $i + 1) {
    echo $i;
}
echo "<br>";

// atau

for ($i = 0; $i < 10; $i++) {
    echo $i;
}