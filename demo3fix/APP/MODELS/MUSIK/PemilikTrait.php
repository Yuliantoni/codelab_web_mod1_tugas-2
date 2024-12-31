<?php
namespace App\Models\Musik;

trait PemilikTrait {
    protected $pemilik;

    public function setPemilik($pemilik) {
        $this->pemilik = $pemilik;
    }

    public function getPemilik() {
        return $this->pemilik;
    }
}

