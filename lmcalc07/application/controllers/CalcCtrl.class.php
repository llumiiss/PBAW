<?php

namespace application\controllers;
use application\forms\CalcForm;
use application\transfer\CalcResult;
use core\Messages;


global $conf;
require_once $conf->root_path.'lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'core/Messages.class.php';
require_once $conf->root_path.'application/forms/CalcForm.class.php';
require_once $conf->root_path.'application/transfer/CalcResult.class.php';

class CalcCtrl {

    private $msgs;
    private $form;
    private $result;


    public function __construct(){
        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();

    }

    function getParamsCalculator(){
        $this->form->quota = getFromRequest('quota');
        $this->form->time = getFromRequest('time');
        $this->form->stake = getFromRequest('stake');
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

public function getMonthQuot()
    {
        $this->getParamsCalculator();

        if ($this->validateCalculator()) {

            $this->form->quota = intval($this->form->quota);
            $this->form->time = intval($this->form->time);
            $this->form->stake = intval($this->form->stake);
            $this->msgs->addInfo('Values is correct.');
            $this->form->howmuchtopay = $this->form->quota / $this->form->stake;
            $this->form->all = $this->form->quota + $this->form->howmuchtopay;
            $this->form->month_quot = $this->form->all / $this->form->time;
            $this->result->month_quot = number_format($this->form->month_quot, 2, '.', '');



            $this->msgs->addInfo('Done');
        }
        $this->generateView();
    }

    public function generateView(){
        getSmarty()->assign('page_title','example 06');
        getSmarty()->assign('page_description',',,,');
        getSmarty()->assign('page_header','main controller');

        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('res',$this->result);

        getSmarty()->display('application/views/calc.tpl');
    }

}