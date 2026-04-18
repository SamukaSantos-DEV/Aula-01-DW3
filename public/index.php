<?php
require_once '../app/controllers/CidadeController.php';

$controller = new CidadeController();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->update();
} elseif (isset($_GET['edit'])) {
    $controller->edit($_GET['id']);
} 
elseif (isset($_GET['create'])) {
    $controller->create();
} 
else {
    $controller->index();
}
