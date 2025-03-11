<?php
require_once dirname(__FILE__).'/../config.php';
$quota = $_REQUEST ['Quota'];
$time = $_REQUEST ['Time'];
$stake = $_REQUEST ['Stake'];

if ( ! (isset($quota) && isset($stake) && isset($time))) {
    $messages [] = 'Missing request parameters.';
}


if ( $quota == "") {
    $messages [] = 'Didnt get a quota';
}
if ( $time == "") {
    $messages [] = 'Didnt get a time';
}
if ( $stake == "") {
    $messages [] = 'Didnt get a stake';
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

    $quota = floatval($quota);
    $time = floatval($time);
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

    $month_quote = ($quota+($stake/100*$quota))/$time;
}
include 'calculator_view.php';