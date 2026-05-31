<?php

// ENCAPSULATION

class Siswa
{
    private $nilai;
    public function setNilai($nilai) {
        if($nilai >= 0) {
            $this->nilai = $nilai;
        }
    }
    public function getNilai() {
        return $this->nilai;
    }
}
$siswa = new Siswa();
$siswa->setNilai(90);
echo $siswa->getNilai();
