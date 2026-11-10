<?php

class Hewan {
    public $nama;
    public $jenis;
    public $suara;

    public function __construct($nama, $jenis, $suara){
        $this-> nama= $nama;
        $this->jenis = $jenis;
        $this->suara = $suara;
    }
    public function bersuara() {
        echo $this->nama . " berbunyi " . $this->suara . "<br>";
    }
}

// Object 1
$kucing = new Hewan("Milo", "Mamalia", "Miaw");

// Object 2
$anjing = new Hewan("Doggy", "Mamalia", "Guk Guk");

// Object 3
$ayam = new Hewan("Jago", "Unggas", "Kukuruyuk");

// Memanggil method
$kucing->bersuara();
$anjing->bersuara();
$ayam->bersuara();

?>