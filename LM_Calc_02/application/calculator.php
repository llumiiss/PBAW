<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/application/security/check.php';

global $role;
$messages = array();
$quota = null;
$time = null;
$stake = null;
$month_quot = null;
$quota = intval($quota);
$time = intval($time);
$stake = floatval($stake);

function getParamsCalculator(&$quota, &$time, &$stake){
    $quota = isset($_REQUEST['Quota']) ? $_REQUEST['Quota'] : null;
    $time = isset($_REQUEST['Time']) ? $_REQUEST['Time'] : null;
    $stake = isset($_REQUEST['Stake']) ? $_REQUEST['Stake'] : null;
}

function validateCalculator(&$quota, &$time, &$stake,&$role,&$messages){
    if (!(isset($quota) && isset($stake) && isset($time))) {
        return false;
    }
    if ($quota == "") {
        $messages [] = 'Didnt get quota';
    }
    if ($time == "") {
        $messages [] = 'Didnt get time';
    }
    if ($stake == "") {
        $messages [] = 'Didnt get stake';
    }
        if (!is_numeric($quota)) {
            $messages [] = 'First value is not a number';
        }
        if (!is_numeric($time)) {
            $messages [] = 'Second value is not a number';
        }
        if (!is_numeric($stake)) {
            $messages [] = 'Third value is not a number';
        }
        if ($quota < 1000 || $quota > 5000000) {
            $messages [] = 'Incorrect quota';
        }
        if ($time < 1 || $time > 420) {
            $messages [] = 'Incorrect time';
        }
        if ($stake < 0 || $stake > 700) {
            $messages [] = 'Incorrect stake';
        }
        if (($quota > 10000) && $role == 'user') {
            $messages [] = 'Only admin can calculate more than 10000';
        }
        if (($time > 60) && $role == 'user') {
            $messages [] = 'Only admin can calculate more than 5 years';
        }
    if (($stake > 100) && $role == 'user') {
        $messages [] = 'Only admin can calculate more than 100% of stake';
    }
    if (count ( $messages ) != 0) return false;
    else return true;
}
function getMonthQuot(&$quota,&$time,&$stake,&$quota_month,&$quot_sum,&$month_quot){
        $quota_month=$stake/$quota;
        $quot_sum=$quota*(1+$quota_month*$time);
        $month_quot = $quot_sum/$time;
    return $month_quot;
}

getParamsCalculator($quota, $time, $stake);
if (validateCalculator($quota,$time,$stake,$role,$messages)) {
    getMonthQuot($quota,$time,$stake,$quota_month,$quot_sum,$month_quot);
}

include 'calculator_view.php';