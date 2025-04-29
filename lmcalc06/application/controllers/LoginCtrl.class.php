<?php

namespace application\controllers;

use application\transfer\User;
use application\forms\LoginForm;

global $conf;
require_once $conf->root_path.'lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'application/forms/LoginForm.class.php';
require_once $conf->root_path.'application/transfer/User.class.php';

class LoginCtrl{
	private $form;
	
	public function __construct(){
		$this->form = new LoginForm();
	}

	public function getParams(){
		$this->form->login = getFromRequest('login');
		$this->form->pass = getFromRequest('pass');
	}

	public function validate() {
		if (! (isset ( $this->form->login ) && isset ( $this->form->pass ))) {
			getMessages()->addError('Misuse of application!');
		}

		if (! getMessages()->isError ()) {

			if ($this->form->login == "") {
				getMessages()->addError ( 'Not given Login' );
			}
			if ($this->form->pass == "") {
				getMessages()->addError ( 'Not given Password' );
			}
		}

		if ( !getMessages()->isError() ) {


			if ($this->form->login == "admin" && $this->form->pass == "admin") {
				if (session_status() == PHP_SESSION_NONE) {
					session_start();
				}
				$user = new User($this->form->login, 'admin');
				$_SESSION['user'] = serialize($user);
			} else if ($this->form->login == "user" && $this->form->pass == "user") {
				if (session_status() == PHP_SESSION_NONE) {
					session_start();
				}
				$user = new User($this->form->login, 'user');
				$_SESSION['user'] = serialize($user);
			} else {
				getMessages()->addError('Incorrect login or password');
			}
		}

		return ! getMessages()->isError();
	}

	public function doLogin(): void
    {

		$this->getParams();

		if ($this->validate()){
			header("Location: ".getConf()->app_url."application/views/templates/main.tpl");
		} else {
			$this->generateView();
		}

	}

	public function doLogout(){
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
		session_destroy();
		

		getMessages()->addInfo('You have successfully logged out of the system');

		$this->generateView();		 
	}
	
	public function generateView(): void
    {
		
		getSmarty()->assign('page_title','Login page');
		getSmarty()->assign('form',$this->form);
		getSmarty()->display('application/views/LoginView.tpl');
	}
}