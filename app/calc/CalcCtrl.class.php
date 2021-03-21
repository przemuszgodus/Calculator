<?php



require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';


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
	

public function getParams(){
		$this->form->kwota = isset($_REQUEST ['kwota']) ? $_REQUEST ['kwota'] : null;
		$this->form->lata = isset($_REQUEST ['lata']) ? $_REQUEST ['lata'] : null;
		$this->form->procent = isset($_REQUEST ['procent']) ? $_REQUEST ['procent'] : null;
}



//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate() {

    //sprawdzenie, czy parametry zostały przekazane - jeśli nie to zakończ walidację
    if (!(isset( $this->form->kwota ) && isset ( $this->form->lata ) && isset ( $this->form->procent ))) {
        return false;
	} 

    if ($this->form->kwota == "") {
			$this->msgs->addError('Nie podano kwoty kredytu');
	}
	
	if ($this->form->lata == "") {
			$this->msgs->addError('Nie podano lat');
	}
	
	if ($this->form->procent == "") {
			$this->msgs->addError('Nie podano oprocentowania');
	}
	
	
	if (! $this->msgs->isError()) {
	
		if (! is_numeric ( $this->form->kwota )) {
				$this->msgs->addError('Kwota nie jest liczbą');
			}
	
		if (! is_numeric ( $this->form->lata )) {
				$this->msgs->addError('Wartość lat nie jest liczbą');
			}
			
		if (! is_numeric ( $this->form->procent )) {
				$this->msgs->addError('Procent lat nie jest liczbą');
			}
	}


	return ! $this->msgs->isError();
	}


  
public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->kwota = floatval($this->form->kwota);
			$this->form->lata = floatval($this->form->lata);
			$this->form->procent = floatval($this->form->procent);
			$this->msgs->addInfo('Parametry poprawne.');
				
				$this->result->result = round((($this->form->kwota) / ($this->form->lata *12) * ($this->form->procent / 100 + 1)),2); 

				
				
			$this->msgs->addInfo('Wykonano obliczenia.');
		}
   	$this->generateView();
}


public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Przykład 06');
		$smarty->assign('page_description','Aplikacja z jednym "punktem wejścia". Model MVC, w którym jeden główny kontroler używa różnych obiektów kontrolerów w zależności od wybranej akcji - przekazanej parametrem.');
		$smarty->assign('page_header','Kontroler główny');
					
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/calc/CalcView.html');
	}
}
