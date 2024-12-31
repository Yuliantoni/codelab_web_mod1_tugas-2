<?php
namespace App\Models\Musik;

require_once 'C:\xampp\htdocs\demo3fix\APP\MODELS\MUSIK\PemilikTrait.php';
use App\Models\Musik\PemilikTrait;
use App\Models\Musik\AlatMusik;

class Drum extends AlatMusik {
    use PemilikTrait;

    public function __construct($nama) {
        parent::__construct($nama, "Drum");
    }

    public function mainkan() {
        echo $this->nama . " dimainkan dengan dipukul.<br>";
    }
}
