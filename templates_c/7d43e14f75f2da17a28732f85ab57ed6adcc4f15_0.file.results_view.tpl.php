<?php
/* Smarty version 3.1.39, created on 2021-04-19 13:58:34
  from 'C:\xampp\htdocs\step-8\app\views\results_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607d706a8aa5d9_23216006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d43e14f75f2da17a28732f85ab57ed6adcc4f15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\step-8\\app\\views\\results_view.tpl',
      1 => 1618833512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607d706a8aa5d9_23216006 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1890477357607d706a8a1510_01998060', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1890477357607d706a8a1510_01998060 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1890477357607d706a8a1510_01998060',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  >wyloguj</a>

</div>



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
                    <p>Credit Calculator Step-8</p>
                </header>
                <a href="#work" class="jumplink pic">
                    <span class="arrow icon solid fa-chevron-right"></span>

                </a>
            </article>

            <!-- Work -->
           <table class="table result-table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Kwota</th>
                <th scope="col">Lata</th>
                <th scope="col">Procent</th>
                <th scope="col">Rata</th>
                <th scope="col">Data</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['credit']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
            
                <tr style="text-align:center;">
                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value["idwynik"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value["kwota"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value["lat"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value["procent"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value["rata"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value["data"];?>
</td>
                </tr>
          
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>

            <!-- Contact -->


        </div>

        <!-- Footer -->
        <div id="footer">
            <ul class="copyright">
                <li>Footer... Step 8</li>
            </ul>
        </div>

    </div>
<?php
}
}
/* {/block 'content'} */
}
