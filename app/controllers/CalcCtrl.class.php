<?php

require_once 'CalcForm.class.php';
require_once 'CalcResult.class.php';


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



//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate() {

    //sprawdzenie, czy parametry zostały przekazane - jeśli nie to zakończ walidację
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


  
public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->kwota = floatval($this->form->kwota);
			$this->form->lata = floatval($this->form->lata);
			$this->form->procent = floatval($this->form->procent);
			getMessages()->addInfo('Parametry poprawne.');
				
				$this->result->result = round((($this->form->kwota) / ($this->form->lata *12) * ($this->form->procent / 100 + 1)),2); 

				
				
			getMessages()->addInfo('Wykonano obliczenia.');
		}
   	$this->generateView();
}


public function generateView(){
	
		getSmarty()->assign('page_title','Przykład 06a');
		getSmarty()->assign('page_description','Aplikacja z jednym "punktem wejścia". Zmiana w postaci nowej struktury foderów, skryptu inicjalizacji oraz pomocniczych funkcji.');
		getSmarty()->assign('page_header','Kontroler główny');
					
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.html'); 
	}
}
