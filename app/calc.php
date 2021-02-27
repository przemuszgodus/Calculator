<?php
require_once dirname(__FILE__).'/../config.php';

// KONTROLER strony kalkulatora

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$kwota,&$lata,&$procent){

    $kwota = isset($_REQUEST ['kwota']) ? $_REQUEST ['kwota'] : null;
    $lata = isset($_REQUEST ['lata']) ? $_REQUEST ['lata'] : null;
    $procent = isset($_REQUEST ['procent']) ? $_REQUEST ['procent'] : null;
}

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane


function validate(&$kwota,&$lata,&$procent,&$messages){

if ( ! (isset($kwota) && isset($lata) && isset($procent))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	return false;
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $kwota == "") {
	$messages [] = 'Nie podano kwoty kredytu';
}
if ( $lata == "") {
	$messages [] = 'Nie podano lat';
}
if ( $procent == "") {
	$messages [] = 'Nie podano oprocentowania';
}

//nie ma sensu walidować dalej gdy brak parametrów
        if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $kwota )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $lata )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	

	if (! is_numeric( $procent )) {
		$messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}
        
        if (count ( $messages ) != 0) return false;
	else return true;
}

// 3. wykonaj zadanie jeśli wszystko w porządku

function process(&$kwota,&$lata,&$procent,&$messages,&$result){
	global $role;
	
	//konwersja parametrów na int
	$kwota = floatval($kwota);
	$lata = floatval($lata);
	$procent = floatval($procent);
	
	
	
        
        if ($kwota>9999 && $role == 'user'){
            $messages [] = 'Tylko administrator może brac kredyt powyzej 9999zł !';
        } else {
            $result = (($kwota)/($lata*12)*($procent/100+1));
                
            }
        
}
$kwota = null;
$lata = null;
$procent = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($kwota,$lata,$procent);
if ( validate($kwota,$lata,$procent,$messages) ) { // gdy brak błędów
	process($kwota,$lata,$procent,$messages,$result);
}


// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie

include 'calc_credit.php';