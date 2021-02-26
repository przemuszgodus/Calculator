<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css">
<style>
body {background-color: #A9A9A9;}
h1 {color: #fff8dc;margin-left: 50px;}
</style>

<meta charset="utf-8" />
<title>Kalkulator Kredytu</title>
</head>
<body>


<div style="width:90%; margin: 2em auto;">
<form action="<?php print(_APP_URL);?>/app/calc.php" method="get" class="pure-form pure-form-stacked">
     <legend>Kalkulator kredytowy</legend>
        <fieldset>
        <label for="id_kwota">Kwota kredytu: </label>
	<input id="id_kwota" type="text" name="kwota" value="<?php if (isset($kwota)) print($kwota); ?>" />
	
	<label for="id_lata">Lata kredytu: </label>
	<input id="id_lata" type="text" name="lata" value="<?php if (isset($lata)) print($lata); ?>" />
	
	<label for="id_proc">Oprocentowanie: </label>
	<input id="id_proc" type="text" name="procent" value="<?php if (isset($procent)) print($procent); ?>" />
	<input type="submit" value="Oblicz rate" class="pure-button" />
</form>	
</div>
<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	
}
?>

<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #dcdcdc; width:25em;">
<?php if (isset($result)){ ?>
<?php echo 'Rata miesięczna wynosi: '.$result.'zł'; ?>
</div>
<?php } ?>

</body>
</html>