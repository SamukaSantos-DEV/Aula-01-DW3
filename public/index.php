<?php
require_once '../app/controllers/CidadeController.php';

$controller = new CidadeController();
$controller->store();
$controller->index();

?>
