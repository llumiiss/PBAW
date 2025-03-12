<?php
require_once dirname(__FILE__).'/../config.php';
$quota = $_REQUEST ['Quota'];
$time = $_REQUEST ['Time'];
$stake = $_REQUEST ['Stake'];

if ( ! (isset($quota) && isset($stake) && isset($time))) {
    $messages [] = 'Missing request parameters.';
}


if ( $quota == "") {
    $messages [] = 'Didnt get quota';
}
if ( $time == "") {
    $messages [] = 'Didnt get time';
}
if ( $stake == "") {
    $messages [] = 'Didnt get stake';
}


if (empty( $messages )) {


    if (! is_numeric( $quota )) {
        $messages [] = 'First value is not a number';
    }

    if (! is_numeric( $time )) {
        $messages [] = 'Second value is not a number';
    }
    if (! is_numeric( $stake )) {
        $messages [] = 'Third value is not a number';
    }

}


if (empty ( $messages )) {

    $quota = intval($quota);
    $time = intval($time);
    $stake = floatval($stake);

    if($quota<1000||$quota>5000000){
        $messages []= 'Incorrect quota';
    }
    if($time<1||$time>420){
        $messages []= 'Incorrect time';
    }
    if($stake<0||$stake>700){
        $messages []= 'Incorrect stake';
    }

    $quota_month=$stake/$quota;
    $quot_sum=$quota*(1+$quota_month*$time);
    $month_quot = $quot_sum/$time;
}
include 'calculator_view.php';