<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    // buat property animals
    public $animals = ["kucing", "ayam", "ikan",];

    // membuat method get
    public function index()
    {
        foreach ($this->animals as $animal)
        {
            echo $animal;
            echo "<br>";
        }

        # kalo mau bentuk json
        // $data = [
        //     'data' => $this->animals
        // ];
        // return response()->json($data);
    }

    // membuat method post
    public function store(Request $request)
    {
        array_push($this->animals, $request->nama);
        $this->index();
    }

    // membuat method put
    public function update(Request $request, $id)
    {
        echo "Mengedit data animals - id $id <br>";
        $this->animals[$id] = $request->nama;
        $this->index();
    }

    // membuat method delete
    public function destroy($id)
    {
        echo "Menghapus data animals - id $id <br>";
        array_splice($this->animals, $id, 1);
        $this->index();
    }
}
