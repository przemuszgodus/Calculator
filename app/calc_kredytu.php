<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<style>
body {background-color: #A9A9A9;}
h1 {color: #fff8dc;margin-left: 50px;}
</style>

<meta charset="utf-8" />
<title>Kalkulator Kredytu</title>
</head>
<body>
<div style="margin-left: 600px; margin-top: 140px; padding: 10px; border-radius: 5px; background-color: #808080; width:200px;">

<h1>Kredyt</h1>
<form action="<?php print(_APP_URL);?>/app/calc.php" method="get">
	<label for="id_kwota">Kwota kredytu: </label>
	<input id="id_kwota" type="text" name="kwota" value="<?php if (isset($kwota)) print($kwota); ?>" />
	<br />
	<label for="id_lata">Lata kredytu: </label>
	<input id="id_lata" type="text" name="lata" value="<?php if (isset($lata)) print($lata); ?>" />
	<br />
	<label for="id_proc">Oprocentowanie: </label>
	<input id="id_proc" type="text" name="procent" value="<?php if (isset($procent)) print($procent); ?>" /><br />
	<input type="submit" value="Oblicz rate" />
</form>	

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
</br>
<?php if (isset($result)){ ?>
<?php echo 'Rata miesięczna wynosi: '.$result.'zł'; ?>
</div>
<?php } ?>

</body>
</html>