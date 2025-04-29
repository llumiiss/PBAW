<?php

global $conf;
require_once 'init.php';

use application\transfer\User;

require_once $conf->root_path . 'application/controllers/LoginCtrl.class.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$user = isset($_SESSION['user']) ? unserialize($_SESSION['user']) : null;

if (!(isset($user) && isset($user->login) && isset($user->role))) {
    $ctrl = new application\controllers\LoginCtrl();
    $ctrl->generateView();
    exit();
}
