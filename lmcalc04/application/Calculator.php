<?php
global $conf;
require_once dirname(__FILE__).'/../config.php';


require_once $conf->root_path.'/application/CalcCtrl.class.php';


$ctrl = new CalcCtrl();
$ctrl->getMonthQuot();
