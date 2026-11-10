
<?php

// CLASS INDUK (PARENT CLASS)

class Hewan {

    // 1. PUBLIC: Bisa diakses dari mana saja
    public $nama;

    // 2. PROTECTED: Bisa diakses class induk dan turunannya
    protected $jenis;

    // 3. PRIVATE: Hanya bisa diakses di dalam class Hewan
    private $suara;

    // Properti statis milik class
    public static $jumlah_hewan = 0;

    // CONSTRUCTOR
    public function __construct($nama, $jenis, $suara) {

        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->suara = $suara;

        self::$jumlah_hewan++;

        echo "Hewan {$this->nama} berhasil dibuat.<br>";
    }

    // DESTRUCTOR
    public function __destruct() {

        echo "Objek hewan {$this->nama} telah dihapus.<br>";
    }

    // Method PUBLIC
    public function bersuara() {

        // Bisa mengakses private karena berada di class Hewan
        echo $this->nama . " berbunyi " . $this->suara . "<br>";
    }

    // Method PUBLIC untuk menampilkan data
    public function tampilkanData() {

        echo "Nama: " . $this->nama . "<br>";
        echo "Jenis: " . $this->jenis . "<br>";
        echo "Suara: " . $this->suara . "<br>";
    }

    // Method STATIC
    public static function getJumlahHewan() {

        return self::$jumlah_hewan;
    }
}

// CLASS TURUNAN (CHILD CLASS)

class Kucing extends Hewan {

    // Method PUBLIC milik class Kucing
    public function tampilkanInfoKucing() {

        echo "<b>Informasi Kucing</b><br>";

        // PUBLIC: Bisa diakses
        echo "Nama: " . $this->nama . "<br>";

        // PROTECTED: Bisa diakses oleh class turunan
        echo "Jenis: " . $this->jenis . "<br>";

        // PRIVATE: Tidak bisa diakses langsung dari class turunan
        // echo $this->suara; // Akan menghasilkan error

        // Memanggil method public milik class induk
        $this->bersuara();
    }
}


// MEMBUAT OBJEK

// Objek dari class turunan
$kucing = new Kucing("Milo", "Mamalia", "Miaw");

// Objek dari class induk
$anjing = new Hewan("Doggy", "Mamalia", "Guk Guk");
$ayam = new Hewan("Jago", "Unggas", "Kukuruyuk");
$kelinci = new Hewan("Vita", "Mamalia", "Citcit");

echo "<hr>";

// MENGAKSES OBJEK

// Memanggil method class turunan
$kucing->tampilkanInfoKucing();

echo "<hr>";

// Memanggil method class induk
$anjing->bersuara();
$ayam->bersuara();
$kelinci->bersuara();

echo "<hr>";

// MENGAKSES PROPERTI PUBLIC

echo "Nama kucing: " . $kucing->nama . "<br>";

// Protected dan private tidak bisa diakses langsung dari luar class
// echo $kucing->jenis; // ERROR
// echo $kucing->suara; // ERROR

echo "<hr>";

// MENGAKSES PROPERTI STATIC

echo "Total hewan yang berhasil dibuat: "
    . Hewan::getJumlahHewan() . " ekor.<br>";

echo "<hr>";

// MENGHAPUS OBJEK

unset($kucing);

if (isset($kucing)) {

    echo "Objek masih ada di memori.<br>";

} else {

    echo "Objek kucing sudah tidak ada di memori.<br>";
}

?>
