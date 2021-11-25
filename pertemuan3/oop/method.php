<?php

# membuat class Person
class Person 
{
    // membuat property (variable)
    public $nama;
    public $alamat;
    public $jurusan;

    // membuat method yang akan memanggil property
    
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
$meuthia = new Person();
$meuthia->setNama("Meuthia");
$meuthia->setAlamat("Depok");
$meuthia->setJurusan("Informatika");
echo $meuthia->getNama();

echo "<br>";

$jabir = new Person();
$jabir->setNama("Jabir");
$jabir->setAlamat("Depok");
$jabir->setJurusan("IPS");
echo $jabir->getNama();
