<?php
/* Smarty version 3.1.39, created on 2021-03-25 14:56:15
  from 'C:\xampp\htdocs\step-6b\app\views\szablon\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605c967f43d680_01482425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '644f80e1c3a804859bef1925f28a5102cc0bb34a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\step-6b\\app\\views\\szablon\\main.tpl',
      1 => 1616281424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605c967f43d680_01482425 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
    <head>
       <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>
">

    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>

	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">


       <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css">
        <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/noscript.css" /></noscript>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
		
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/softscroll.js"><?php echo '</script'; ?>
>
	
	
    </head>
    <body> 
        <div id="wrapper">
            <div id="one" class="content" >

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_477264659605c967f43d0e7_38619582', 'content');
?>


            </div>
        </div>


       
    </body>
</html><?php }
/* {block 'content'} */
class Block_477264659605c967f43d0e7_38619582 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_477264659605c967f43d0e7_38619582',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
