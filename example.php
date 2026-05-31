<?php
// CLASS & OBJECT

class Siswa
{
    public $nama;
    public $kelas;

    public function belajar() {
        return "Sedang Belajar";
    }
}
$siswa1 = new Siswa();
