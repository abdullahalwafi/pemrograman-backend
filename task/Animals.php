<?php
class Animal
{
    public $data = array();

    public function __construct()
    {
        $this->data =
            [
                [
                    'name' => 'Ayam',
                ],
                [
                    'name' => 'Ikan',
                ],
            ];
    }

    public function index()
    {
        foreach ($this->data as $key => $value) {
            echo '- ' . $value['name'] . '<br>';
        }
    }

    public function store($name)
    {
        array_push($this->data, ["name" => $name]);
    }

    public function update($index, $name)
    {
        if(isset($this->data[$index])){
            $this->data[$index]['name'] = $name;
        } else{
            echo "update gagal: data tidak ditemukan!<br>";
        }
    }
    public function destroy($index)
    {
        unset($this->data[$index]);
    }
}

$animal = new Animal();
echo 'Index - Menampilkan Seluruh Hewan <br>';
$animal->index();
echo '<br>';

echo 'Store - Menambahkan Hewan Baru (burung) <br>';
$animal->store('Burung');
$animal->index();
echo '<br>';

echo 'Update - Mengedit hewan <br>';
$animal->update(22, "Kucing Anggora");
$animal->index();
echo '<br>';

echo 'Delete - Menghapus hewan <br>';
$animal->destroy(1);
$animal->index();
echo '<br>';
