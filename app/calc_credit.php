<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<link rel="stylesheet" type="text/css" href="<?php print(_APP_URL); ?>/app/css/style.css">
<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css">

        
<meta charset="utf-8" />
<title>Kalkulator Kredytu</title>

</head>
<body>

<div style="width:90%; margin: 2em auto;">
    
    <a href="<?php print(_APP_ROOT); ?>/app/secured_website.php" class="pure-button">Alternatywa</a>
    <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
    
<form action="<?php print(_APP_ROOT);?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
     <legend>Kalkulator kredytowy</legend>
        <fieldset>
        <label for="id_kwota">Kwota kredytu: </label>
	<input id="id_kwota" type="text" name="kwota" value="<?php if (isset($kwota)) print($kwota); ?>" />
	
	<label for="id_lata">Lata kredytu: </label>
	<input id="id_lata" type="text" name="lata" value="<?php if (isset($lata)) print($lata); ?>" />
	
	<label for="id_proc">Oprocentowanie: </label>
	<input id="id_proc" type="text" name="procent" value="<?php if (isset($procent)) print($procent); ?>" />
        </fieldset>
	<input type="submit" value="Oblicz rate" class="pure-button" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
    if (count ( $messages ) > 0) {
		echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
    }
}
?>


<?php if (isset($result)){ ?>
    <div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #dcdcdc; width:25em;">
<?php echo 'Rata miesięczna wynosi: '.$result.'zł'; ?>
</div>
<?php } ?>
</div>
</body>
</html>