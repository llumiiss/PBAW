<?php
require_once dirname(__FILE__).'/config.php';

header("Location: "._APP_URL."/application/calculator.php");

include _ROOT_PATH.'/application/calculator_view.php';