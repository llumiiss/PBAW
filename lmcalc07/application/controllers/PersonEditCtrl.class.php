<?php

namespace application\controllers;

use application\forms\PersonEditForm;
use DateTime;
use PDOException;

class PersonEditCtrl {

	private $form;

	public function __construct(){
		$this->form = new PersonEditForm();
	}

	public function validateSave() {
		$this->form->id = getFromRequest('id',true,'Incorrect application call');
		$this->form->name = getFromRequest('name',true,'Incorrect application call');
		$this->form->surname = getFromRequest('surname',true,'Incorrect application call');
		$this->form->birthdate = getFromRequest('birthdate',true,'Incorrect application call');

		if ( getMessages()->isError() ) return false;

		if (empty(trim($this->form->name))) {
			getMessages()->addError('Write a name');
		}
		if (empty(trim($this->form->surname))) {
			getMessages()->addError('Write a surname');
		}
		if (empty(trim($this->form->birthdate))) {
			getMessages()->addError('Write a birthdate');
		}

		if ( getMessages()->isError() ) return false;

		
		$d = DateTime::createFromFormat('Y-m-d', $this->form->birthdate);
		if ( $d === false ){
			getMessages()->addError('incorrect data type');
		}
		
		return ! getMessages()->isError();
	}

	public function validateEdit() {
		$this->form->id = getFromRequest('id',true,'Incorrect application call');
		return ! getMessages()->isError();
	}
	
	public function action_personNew(){
		$this->generateView();
	}

	public function action_personEdit(){
		if ( $this->validateEdit() ){
			try {
				$record = getDB()->get("person", "*",[
					"idperson" => $this->form->id
				]);
				$this->form->id = $record['idperson'];
				$this->form->name = $record['name'];
				$this->form->surname = $record['surname'];
				$this->form->birthdate = $record['birthdate'];
			} catch (PDOException $e){
				getMessages()->addError('An error occurred while reading the record');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}	
		} 

		$this->generateView();		
	}

	public function action_personDelete(){
		if ( $this->validateEdit() ){
			
			try{
				getDB()->delete("person",[
					"idperson" => $this->form->id
				]);
				getMessages()->addInfo('Record deleted successfully');
			} catch (PDOException $e){
				getMessages()->addError('An error occurred while deleting the record');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}	
		}

		forwardTo('personList');		
	}

	public function action_personSave(){

		if ($this->validateSave()) {
			try {

				if ($this->form->id == '') {
					$count = getDB()->count("person");
					if ($count <= 20) {
						getDB()->insert("person", [
							"name" => $this->form->name,
							"surname" => $this->form->surname,
							"birthdate" => $this->form->birthdate
						]);
					} else {
						getMessages()->addInfo('Limitation: Too many records. To add a new one, delete the selected entry.');
						$this->generateView();
						exit();
					}
				} else {
					getDB()->update("person", [
						"name" => $this->form->name,
						"surname" => $this->form->surname,
						"birthdate" => $this->form->birthdate
					], [ 
						"idperson" => $this->form->id
					]);
				}
				getMessages()->addInfo('Record saved successfully');

			} catch (PDOException $e){
				getMessages()->addError('An unexpected error occurred while saving the record');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}

			forwardTo('personList');

		} else {
			$this->generateView();
		}		
	}
	
	public function generateView(){
		getSmarty()->assign('form',$this->form);
		getSmarty()->display('PersonEdit.tpl');
	}
}
 