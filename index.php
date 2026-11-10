<?php

class Hewan {
    public $nama;
    public $jenis;
    public $suara;

    public function bersuara() {
        echo $this->nama . " berbunyi " . $this->suara . "<br>";
    }
}

// Object 1
$kucing = new Hewan();
$kucing->nama = "Milo";
$kucing->jenis = "Mamalia";
$kucing->suara = "Meong";

// Object 2
$anjing = new Hewan();
$anjing->nama = "Doggy";
$anjing->jenis = "Mamalia";
$anjing->suara = "Guk Guk";

// Object 3
$ayam = new Hewan();
$ayam->nama = "Jago";
$ayam->jenis = "Unggas";
$ayam->suara = "Kukuruyuk";

// Memanggil method
$kucing->bersuara();
$anjing->bersuara();
$ayam->bersuara();

?>