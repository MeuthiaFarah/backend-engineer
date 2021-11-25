<?php

# membuat class Person
class Person 
{
    // membuat property (variable)
    private $nama;
    private $alamat;
    private $jurusan;

    // buat cunstructor yang akan mengisi nilai awal dari sebuah objek
    function __construct($nama, $alamat, $jurusan)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
    }
    // membuat method yang akan memanggil property
    // setelah ada constructor, gunanya function dibawah untuk edit data saja
    // nama
    function setNama($data)
    {
        $this->nama = $data;
    }
    function getNama()
    {
        return $this->nama;
    }

    //alamat
    function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }
    function getAlamat()
    {
        return $this->alamat;
    }

    //jurusan
    function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }
    function getJurusan()
    {
        return $this->jurusan;
    }
};

// membuat object
$meuthia = new Person("Meuthia", "Depok", "Informatika");
echo $meuthia->getNama();

echo "<br>";

$jabir = new Person("Jabir", "Bekasi", "IPS");
echo $jabir->getNama();