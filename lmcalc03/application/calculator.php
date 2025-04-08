<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';

$form = null;
$infos = array();
$messages = array();
$hide_intro = false;
$month_quot = null;

    function getParamsCalculator(&$form){
        $form['quota'] = isset($_REQUEST['quota']) ? $_REQUEST['quota'] : null;
        $form['time'] = isset($_REQUEST['time']) ? $_REQUEST['time'] : null;
        $form['stake'] = isset($_REQUEST['stake']) ? $_REQUEST['stake'] : null;
    }

function validateCalculator($form,&$infos,&$msgs,&$hide_intro){

	if ( ! (isset($form['quota']) && isset($form['time']) && isset($form['stake']) ))	return false;

	$hide_intro = true;

	$infos [] = 'Information received.';

	if ( $form['quota'] == "") $msgs [] = 'Didnt get number 1';
	if ( $form['time'] == "") $msgs [] = 'Didnt get number 2';

	if ( count($msgs)==0 ) {
		if (! is_numeric( $form['quota'] )) $msgs [] = 'Quota should be a number';
		if (! is_numeric( $form['time'] )) $msgs [] = 'Time should be a number(in months)';
	}

	if (count($msgs)>0) return false;
	else return true;
}

getParamsCalculator($form);
if ( validateCalculator($form,$infos,$messages,$hide_intro) ){
    $quota = floatval($form['quota']);
    $time = floatval($form['time']);
    $stake = floatval($form['stake']);

    getMonthQuot($quota,$stake,$time,$month_quot);
}

function getMonthQuot($quota,$stake,$time,&$month_quot)
{
    $howmuchtopay = $quota / $stake;
    $all = $quota + $howmuchtopay;
    $month_quot = $all / $time;
    $month_quot = number_format($month_quot, 2, '.', '');
    return $month_quot;
}

$smarty = new Smarty\Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Example 04');
$smarty->assign('page_description','Skeleton based on professional smarts ');
$smarty->assign('page_header','Smarts');

$smarty->assign('hide_intro',$hide_intro);

$smarty->assign('form',$form);
$smarty->assign('month_quot',$month_quot);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

$smarty->display(_ROOT_PATH.'/application/calc.html');