<?php
/* Smarty version 3.1.39, created on 2021-03-21 00:09:59
  from 'C:\xampp\htdocs\step-4\app\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605680c7dae5d5_55442657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcbc117e5f478fc593dc107ff79ebfb0545f4ef6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\step-4\\app\\CalcView.html',
      1 => 1616281796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605680c7dae5d5_55442657 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2141114146605680c7da3a40_92513614', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/szablon/main.html"));
}
/* {block 'content'} */
class Block_2141114146605680c7da3a40_92513614 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2141114146605680c7da3a40_92513614',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <!-- Wrapper-->
    <div id="wrapper">

        <!-- Nav -->
        <nav id="nav">
            <a href="#" class="icon solid fa-home"><span>Home</span></a>
            <a href="#work" class="icon solid fa-calculator"><span>Calculator</span></a>

        </nav>

        <!-- Main -->
        <div id="main">

            <!-- Me -->
            <article id="home" class="panel intro">
                <header>
                    <h1>Przemysław Zgoda</h1>
                    <p>Basic Credit Calculator Step-4</p>
                </header>
                <a href="#work" class="jumplink pic">
                    <span class="arrow icon solid fa-chevron-right"></span>

                </a>
            </article>

            <!-- Work -->
            <article id="work" class="panel">
                <header>
                    <h2>Kalkulator kredytowy</h2>
                </header>
                <p>
                    po wprowadzeniu kwoty kredytu, czasu spłaty i oprocentowania, zwróci kwote pojedynczej raty.
                </p>
                <section>
                    <div class="row">
                        <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
                            <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php#work" method="post">
                                <fieldset>

                                    <label for="kwota">Kwota</label>
                                    <input id="kwota" type="text" placeholder="Kwota kredytu" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
">

                                    <label for="lata">Lata</label>
                                    <input id="lata" type="text" placeholder="Lata kredytu" name="lata" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lata;?>
">

                                    <label for="procent">Oprocentowanie</label>
                                    <input id="procent" type="text" placeholder="Podaj oprocentowanie" name="procent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->procent;?>
">

                                    <button type="submit" class="pure-button">Oblicz</button>
                                </fieldset>
                            </form>
                        </div>

                        <div class="l-box-lrg pure-u-1 pure-u-med-3-5">


                            <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

                            

                           <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
                                <h4>Wynik</h4>
                                <p class="result">
                                    <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

                                </p>
                            <?php }?>

                        </div>


                    </div>
                </section>
            </article>

            <!-- Contact -->


        </div>

        <!-- Footer -->
        <div id="footer">
            <ul class="copyright">
                <li>Footer... Step 4</li>
            </ul>
        </div>

    </div>
<?php
}
}
/* {/block 'content'} */
}
