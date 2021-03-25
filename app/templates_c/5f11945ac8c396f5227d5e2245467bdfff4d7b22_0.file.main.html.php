<?php
/* Smarty version 3.1.39, created on 2021-03-21 14:48:52
  from 'C:\xampp\htdocs\step-6\szablon\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60574ec428fce9_71845331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f11945ac8c396f5227d5e2245467bdfff4d7b22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\step-6\\szablon\\main.html',
      1 => 1616281424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60574ec428fce9_71845331 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30959417960574ec428f717_11533688', 'content');
?>


            </div>
        </div>


       
    </body>
</html><?php }
/* {block 'content'} */
class Block_30959417960574ec428f717_11533688 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_30959417960574ec428f717_11533688',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
