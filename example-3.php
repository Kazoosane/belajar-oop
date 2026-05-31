<?php

// ENHERITANCE

class Kendaraan {
    public $nama;

    public function nyalakanMesin() {
        return "Mesin " . $this->nama . " berhasil dinyalakan! 🏁";
    }
}

class Mobil extends Kendaraan {
}

class Motor extends Kendaraan {
    
}

$mobilBaru = new Mobil();
$mobilBaru->nama = "Avanza";
echo $mobilBaru->nyalakanMesin();
