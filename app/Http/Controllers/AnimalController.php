<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $animals = ['kucing', 'ayam', 'ikan'];
    public function index()
    {
        echo "menampilkan data animals <br>";
        foreach ($this->animals as $animal) {
            echo '- ' . $animal . '<br>';
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        array_push($this->animals, $request->animal);
        echo "menambahkan hewan baru <br>";

        $this->index();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $namasebelumnya = $this->animals[$id];
        if (isset($this->animals[$id])) {
            $this->animals[$id] = $request->animal;
            echo "mengedit hewan $namasebelumnya menjadi $request->animal<br>";
        } else {
            echo "update gagal: data tidak ditemukan!<br>";
        }

        $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $namasebelumnya = $this->animals[$id];
        if (isset($this->animals[$id])) {
            unset($this->animals[$id]);
            echo "Menghapus hewan $namasebelumnya<br>";
        } else {
            echo "Delete gagal: data tidak ditemukan!<br>";
        }

        $this->index();
    }
}
