<?php

// POLYMORPHISM

class Hewan
{
    public function bersuara() {
        echo "Hewan bersuara";
    }
}

class Kucing extends Hewan
{
    public function bersuara() {
        echo "Meong";
    }
}

class Anjing extends Hewan
{
    public function bersuara() {
        echo "Guk guk";
    }
}

class Ayam extends Hewan
{
    public function bersuara() {
        echo "Kukuruyuk";
    }
}

$hewan1 = new Kucing();
$hewan2 = new Anjing();
$hewan3 = new Ayam();
