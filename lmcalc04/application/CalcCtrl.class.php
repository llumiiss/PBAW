<?php

global $conf;
require_once $conf->root_path.'\lib\smarty\Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/application/CalcForm.class.php';
require_once $conf->root_path.'/application/CalcResult.class.php';

class CalcCtrl {

    private $msgs;
    private $form;
    private $result;
    private $hide_intro;

    public function __construct(){
        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
        $this->hide_intro = false;
    }

    function getParamsCalculator(){
        $this->form->quota = isset($_REQUEST['quota']) ? $_REQUEST['quota'] : null;
        $this->form->time = isset($_REQUEST['time']) ? $_REQUEST['time'] : null;
        $this->form->stake = isset($_REQUEST['stake']) ? $_REQUEST['stake'] : null;
    }


    function validateCalculator(){

        if (! (isset ( $this->form->quota ) && isset ( $this->form->time ) && isset ( $this->form->stake ))) {
            return false;
        } else {
            $this->hide_intro = true;
        }

        $this->msgs->addInfo('Got the info.');

        if ($this->form->quota == "") {
            $this->msgs->addError('Didnt enter quota.');
        }
        if ($this->form->time == "") {
            $this->msgs->addError('Didnt enter time.');
        }
        if ($this->form->stake == "") {
            $this->msgs->addError('Didnt enter stake.');
        }

        if (! $this->msgs->isError()) {


            if (! is_numeric ( $this->form->quota )) {
                $this->msgs->addError('Quota must be numeric.');
            }
            if (! is_numeric ( $this->form->time )) {
                $this->msgs->addError('Time must be numeric.(in months)');
            }
            if (! is_numeric ( $this->form->stake )) {
                $this->msgs->addError('Stake must be numeric.');
            }
        }

        return ! $this->msgs->isError();
    }

    function getMonthQuot()
    {
        $this->getParamsCalculator();

        if ($this->validateCalculator()) {

            $this->form->quota = intval($this->form->quota);
            $this->form->time = intval($this->form->time);
            $this->form->stake = intval($this->form->stake);
            $this->msgs->addInfo('Values is correct.');

            //$howmuchtopay = $quota / $stake;
           // $all = $quota + $howmuchtopay;
           // $month_quot = $all / $time;
          //  $month_quot = number_format($month_quot, 2, '.', '');
          //  return $month_quot;
            $this->form->howmuchtopay = $this->form->quota / $this->form->stake;
            $this->form->all = $this->form->quota + $this->form->howmuchtopay;
            $this->form->month_quot = $this->form->all / $this->form->time;
            $this->result->month_quot = number_format($this->form->month_quot, 2, '.', '');



            $this->msgs->addInfo('Done');
        }
        $this->generateView();
    }

    public function generateView(){

        global $conf;
        $smarty = new Smarty();
        $smarty->assign('conf',$conf);

        $smarty->assign('page_title','przyklad05');
        $smarty->assign('page_description','stosowanie martow iobiektow');
        $smarty->assign('page_header','obiektowosc');

        $smarty->assign('hide_intro',$this->hide_intro);

        $smarty->assign('form', $this->form);
        $smarty->assign('messages', $this->msgs->getErrors());
        $smarty->assign('infos', $this->msgs->getInfos());
        $smarty->assign('result', $this->result->month_quot);

        $smarty->display($conf->root_path.'/application/calc.html');
    }

}