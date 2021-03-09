<?php  
include _ROOT_PATH.'/templates/top.php';
?>

    
    
  
 
    
    <form action="<?php print(_APP_ROOT);?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
    <div id="box">
           <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
            <fieldset>
                
            <label for="id_kwota">Kwota kredytu: </label>
            <input id="id_kwota" type="text" name="kwota" value="<?php if (isset($kwota)) print($kwota); ?>" />
	
            <label for="id_lata">Lata kredytu: </label>
            <input id="id_lata" type="text" name="lata" value="<?php if (isset($lata)) print($lata); ?>" />
	
            <label for="id_proc">Oprocentowanie: </label>
            <input id="id_proc" type="text" name="procent" value="<?php if (isset($procent)) print($procent); ?>" />
        
            </fieldset>
    </div>       
            <input type="submit" value="Oblicz rate" class="pure-button" />
   

  
    
  <?php if (isset($result)){ ?>
                <div class = "result">
                    <?php echo 'Wysokość raty: '.$result.' zł'; ?>
                </div>
            <?php } ?>
            <?php
                if (count($messages) > 0) {
                    echo '<ol id = "error">';
                        foreach ($messages as $msg ){
                            echo '<li>'.$msg.'</li>';
                        }
                    echo '</ol>';
                }
            ?>
 </form>
</div
   <?php //dĂłĹ‚ strony z szablonu 
include _ROOT_PATH.'/templates/bottom.php';
?>
