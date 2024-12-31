<?php
namespace App\Models\Musik;

class GitarListrik extends AlatMusik {
    use PemilikTrait;

    private $amplifier;

    public function __construct($nama, $amplifier) {
        parent::__construct($nama, "Gitar Listrik");
        $this->amplifier = $amplifier;
    }

    public function mainkan() {
        echo $this->nama . " dimainkan dengan distorsi dari amplifier " . $this->amplifier . ".<br>";
    }
}
