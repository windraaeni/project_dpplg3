<?php

class Hewan {
    // Properti non-statis (milik objek, diakses dengan $this)
    public $nama;
    public $jenis;
    public $suara;

    // Properti statis (milik kelas/bersama, diakses dengan self::)
    public static $jumlah_hewan = 0;

    public function __construct($nama, $jenis, $suara){
        // Menggunakan $this untuk mengisi data masing-masing objek
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->suara = $suara;

        // Menggunakan self:: untuk mengakses dan menambah nilai properti statis kelas
        self::$jumlah_hewan++;
    }
    // Otomatis dipanggil saat objek dihapus atau script selesai
    public function __destruct() {
        echo "Objek hewan <b>{$this->nama}</b> telah dihapus dari memori komputer.<br>";
    }
    // Method non-statis (milik objek)
    public function bersuara() {
        echo $this->nama . " (" . $this->jenis . ") berbunyi " . $this->suara . "<br>";
    }

    // Method statis (milik kelas, diakses tanpa instansiasi objek)
    public static function getJumlahHewan() {
        // Menggunakan self:: untuk mengakses properti statis di dalam method statis
        return self::$jumlah_hewan;
    }
}

// Membuat objek (Constructor dipanggil, self::$jumlah_hewan bertambah)
$kucing = new Hewan("Milo", "Mamalia", "Miaw");
$anjing = new Hewan("Doggy", "Mamalia", "Guk Guk");
$ayam = new Hewan("Jago", "Unggas", "Kukuruyuk");
$kelinci = new Hewan ("Vita", "Mamalia", "citcit");

// Memanggil method objek menggunakan $this
$kucing->bersuara();
$anjing->bersuara();
$ayam->bersuara();
$kelinci->bersuara();

echo "<hr>";

// Memanggil method statis menggunakan nama kelas dan self:: (tanpa membuat objek baru)
echo "Total hewan yang berhasil dibuat: " . Hewan::getJumlahHewan() . " ekor.<br>";

unset($kucing);
if (isset($kucing)){
    echo "Status: Objek masih ada di memori. <br>";
    $kucing->bersuara();
}else{
    echo "sudah tidak ada di memori <br>";
}

?>