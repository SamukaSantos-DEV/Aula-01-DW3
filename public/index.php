<?php
require_once '../app/controllers/CidadeController.php';

$controller = new CidadeController();

if ($_SERVER['  REQUEST_METHOD'] === 'POST') {
    $controller->store();
} else {
    $controller->index();
}

?>
