<?php

namespace app\controllers;


use app\forms\CalcForm;
use app\transfer\CalcResult;


class CalcCtrl {

  
	private $form;   
	private $result; 
	

	public function __construct(){
		
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		
	}
	

public function getParams(){
		$this->form->kwota = getFromRequest('kwota');
		$this->form->lata = getFromRequest('lata');
		$this->form->procent = getFromRequest('procent');
}


function validate() {

    if (!(isset( $this->form->kwota ) && isset ( $this->form->lata ) && isset ( $this->form->procent ))) {
        return false;
	} 

    if ($this->form->kwota == "") {
		
			getMessages()->addError('Nie podano kwoty kredytu');
	}
	
	if ($this->form->lata == "") {
			getMessages()->addError('Nie podano lat kredytu');
	}
	
	if ($this->form->procent == "") {
			getMessages()->addError('Nie podano oprocentowania');
	}
	
	
	if (! getMessages()->isError()) {
	
		if (! is_numeric ( $this->form->kwota )) {
				getMessages()->addError('Kwota nie jest liczbą');
			}
	
		if (! is_numeric ( $this->form->lata )) {
			getMessages()->addError('Wartość lat nie jest liczbą');
				
			}
			
		if (! is_numeric ( $this->form->procent )) {
			getMessages()->addError('Procent lat nie jest liczbą');
				
			}
	}


		return ! getMessages()->isError();
	}

 
public function action_calcCompute(){

		$this->getparams();
		
		if ($this->validate()) {
				
			$this->form->kwota = floatval($this->form->kwota);
			$this->form->lata = floatval($this->form->lata);
			$this->form->procent = floatval($this->form->procent);
			getMessages()->addInfo('Parametry poprawne.');
				
				
				
				if($this->form->kwota>9999 && inRole('user')){
				getMessages()->addError('Tylko admin może brać kredyt wyższy niż 9999zł');
				}else{ 
				$this->result->result = round((($this->form->kwota) / ($this->form->lata *12) * ($this->form->procent / 100 + 1)),2); 
				}
		}
			try{
		getDB()->insert("wynik", [
			"kwota" => $this->form->kwota,
			"lat" => $this->form->lata,
			"procent" => $this->form->procent,
			"rata" => $this->result->result,
			"data" => date("Y-m-d")
		]);
	}catch(\PDOException $e){
		getMessages()->addError('Wystąpił błąd podczas zapisywania rekordu');
		if (getConf()->debug){
			getMessages()->addError($e->getMessage());
		} 
	}

   	$this->generateView();
}
public function action_calcShow(){
		$this->generateView();
	}

	public function generateView(){

		getSmarty()->assign('user',unserialize($_SESSION['user']));
				
		getSmarty()->assign('page_title','Super kalkulator - baza');

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.tpl');
	}
}