<?php
namespace App\Models\Musik;

abstract class AlatMusik {
    protected $nama;
    protected $jenis;

    public function __construct($nama, $jenis) {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    abstract public function mainkan();

    public function getNama() {
        return $this->nama;
    }

    public function getJenis() {
        return $this->jenis;
    }
}
