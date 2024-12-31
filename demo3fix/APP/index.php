<?php
require_once '../APP/MODELS/MUSIK/AlatMusik.php';
require_once '../APP/MODELS/MUSIK/Drum.php';
require_once '../APP/MODELS/MUSIK/GitarListrik.php';
require_once '../APP/MODELS/MUSIK/GitarAkustik.php';
require_once '../APP/MODELS/MUSIK/PemilikTrait.php';
require_once 'C:\xampp\htdocs\demo3fix\APP\CONTROLLERS\MusikContoller.php';
require_once '../APP/VIEWS/musik_view.php';

use App\Controllers\MusikController;

$controller = new MusikController();
$controller->tampilkanAlatMusik();
