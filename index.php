<?php

declare(strict_types=1);

namespace App;

include_once('./src/View.php');
include_once('./src/utils/debug.php');

const DEFAULT_ACTION = 'list';

$action = $_GET['action'] ?? DEFAULT_ACTION;

$viewParams = [];

if ($action === 'create') {
    $viewParams['resultCreate'] = 'Tworzymy nowa notatre';
} else {
    $viewParams['resultList'] = 'Wyswietlamy liste notatek';
}




$view = new View();
$view->render($action, $viewParams);