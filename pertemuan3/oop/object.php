<?php

# membuat class Person
class Person {
    // membuat property (variable)
    public $nama;
    public $alamat;
    public $jurusan;
};

// membuat object
// $meuthia dan $jabir adalah object baru dari class person
// nama adalah property
// setelah tanda = adalah value dari property nya
$meuthia = new Person();
$meuthia->nama = "Meuthia Farah Hidayah";
echo $meuthia->nama;

echo "<br>";

$jabir = new Person();
$jabir->nama = "Ahmad Jabir";
$jabir->alamat = "Depok";
echo $jabir->alamat;