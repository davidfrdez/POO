<?php
include "./Interfaces/PuertasInterface.php";
include "./Class/Puerta.php";
include "./Controllers/SeurosController.php";


$Controlador = new SeurosController(new Puerta);

$Controlador->Cambios("david");