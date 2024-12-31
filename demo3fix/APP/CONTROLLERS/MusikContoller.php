<?php
namespace App\Controllers;

use App\Models\Musik\Drum;
use App\Models\Musik\GitarListrik;
use App\Models\Musik\GitarAkustik;
use App\Views\MusikView;

class MusikController {
    private $alatMusik = [];

    public function __construct() {
        $this->initializeAlatMusik();
    }

    private function initializeAlatMusik() {
        $drum = new Drum("Drum Bass");
        $drum->setPemilik("Ahmad");
        
        $gitarListrik = new GitarListrik("Gitar Fender", "Marshall");
        $gitarListrik->setPemilik("Budi");

        $gitarAkustik = new GitarAkustik("Gitar Yamaha");
        $gitarAkustik->setPemilik("Citra");

        $this->alatMusik = [$drum, $gitarListrik, $gitarAkustik];
    }

    public function tampilkanAlatMusik() {
        $view = new MusikView();
        $view->displayAllInstruments($this->alatMusik);
    }
}
