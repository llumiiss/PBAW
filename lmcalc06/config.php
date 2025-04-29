<?php

require_once dirname(__FILE__).'/core/Config.class.php';

use core\Config;

$conf = new Config();


$conf->server_name = 'localhost:80';
$conf->server_url = 'http://' . $conf->server_name;
$conf->app_root = '/lmcalc06';
$conf->action_root = $conf->app_root . '/ctrl.php?action=';


$conf->action_url = $conf->server_url . $conf->action_root;
$conf->app_url = $conf->server_url . $conf->app_root;
$conf->root_path = realpath(dirname(__FILE__));

