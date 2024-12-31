<?php
namespace App\Models\Musik;

class GitarAkustik extends AlatMusik {
    use PemilikTrait;

    public function __construct($nama) {
        parent::__construct($nama, "Gitar Akustik");
    }

    public function mainkan() {
        echo $this->nama . " dimainkan dengan cara dipetik.<br>";
    }
}
