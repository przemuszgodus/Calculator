<?php

// KONTROLER strony kalkulatora
require_once dirname(__FILE__) . '/../config.php';
//załaduj Smarty
require_once _ROOT_PATH . '/lib/smarty/Smarty.class.php';

//pobranie parametrów
function getParams(&$form) {
    $form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
    $form['lata'] = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
    $form['procent'] = isset($_REQUEST['procent']) ? $_REQUEST['procent'] : null;
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$form, &$infos, &$msgs, &$hide_intro) {

    //sprawdzenie, czy parametry zostały przekazane - jeśli nie to zakończ walidację
    if (!(isset($form['kwota']) && isset($form['lata']) && isset($form['procent']) ))
        return false;

    //parametry przekazane zatem
    //nie pokazuj wstępu strony gdy tryb obliczeń (aby nie trzeba było przesuwać)
    // - ta zmienna zostanie użyta w widoku aby nie wyświetlać całego bloku itro z tłem 
    $hide_intro = true;



    // sprawdzenie, czy potrzebne wartości zostały przekazane
    if ($form['kwota'] == "")
        $msgs [] = 'Nie podano kwoty kredytu';
    if ($form['lata'] == "")
        $msgs [] = 'Nie podano lat';
    if ($form['procent'] == "")
        $msgs [] = 'Nie podano oprocentowania';

    //nie ma sensu walidować dalej gdy brak parametrów
    if (count($msgs) == 0) {
        // sprawdzenie, czy $x i $y są liczbami całkowitymi
        if (!is_numeric($form['kwota']))
            $msgs [] = 'Wartość kredytu nie jest liczbą';
        if (!is_numeric($form['lata']))
            $msgs [] = 'Wartość lat nie jest liczbą';
        if (!is_numeric($form['procent']))
            $msgs [] = 'Oprocentowanie nie jest liczbą';
    }

    if (count($msgs) > 0)
        return false;
    else
        return true;
}

// wykonaj obliczenia
function process(&$form, &$infos, &$msgs, &$result) {


    //konwersja parametrów na int
    $form['kwota'] = floatval($form['kwota']);
    $form['lata'] = floatval($form['lata']);
    $form['procent'] = floatval($form['procent']);

    //wykonanie operacji



    $result = round((($form['kwota']) / ($form['lata'] * 12) * ($form['procent'] / 100 + 1)), 2);
}

//inicjacja zmiennych
$form = null;
$infos = array();
$messages = array();
$result = null;
$hide_intro = false;

getParams($form);
if (validate($form, $infos, $messages, $hide_intro)) {
    process($form, $infos, $messages, $result);
}

// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('page_title', 'Calculator Zgoda');
$smarty->assign('page_description', 'Wyłączono opcje logowania, w celu usprawnienia korzystania z kalkulatora');
$smarty->assign('page_header', 'Szablony Smarty');

$smarty->assign('hide_intro', $hide_intro);

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form', $form);
$smarty->assign('result', $result);
$smarty->assign('messages', $messages);
$smarty->assign('infos', $infos);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH . '/app/calc.tpl');
