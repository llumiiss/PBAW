<?php

global $action;
require_once 'init.php';
require_once 'application/controllers/CalcCtrl.class.php';
switch ($action) {
    default :
        $ctrl = new application\controllers\CalcCtrl();
        $ctrl->generateView();
        break;
    case 'calcCompute' :
        $ctrl = new application\controllers\CalcCtrl();
        $ctrl->getMonthQuot();
        break;
}
