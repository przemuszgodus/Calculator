<?php
require_once 'init.php';

switch ($action) {
	default : 
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
	
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->process ();
	break;
	case 'action1' :
		
		print('hello');
	break;
	case 'action2' :
		
		print('goodbye');
	break;
}
