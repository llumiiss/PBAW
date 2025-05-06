<?php
/* Smarty version 5.4.2, created on 2025-04-29 21:56:04
  from 'file:application/views/LoginView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_68112ed43c0552_93334416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92b93e5a49d54815183ee3d48fc1793ce90270bf' => 
    array (
      0 => 'application/views/LoginView.tpl',
      1 => 1745956562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/templates/messages.tpl' => 1,
  ),
))) {
function content_68112ed43c0552_93334416 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Uni\\htdocs\\lmcalc06\\application\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_81277534968112ed43b63d6_49699035', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "application/views/templates/main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_81277534968112ed43b63d6_49699035 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Uni\\htdocs\\lmcalc06\\application\\views';
?>

	<form action="index.php?action=login" method="post" class="pure-form pure-form-aligned">

	<legend>Login into system</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->getValue('form')->login;?>
" />
		</div>
        <div class="pure-control-group">
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" value="<?php echo $_smarty_tpl->getValue('form')->pass;?>
" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	

<?php $_smarty_tpl->renderSubTemplate('file:application/views/templates/messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php
}
}
/* {/block 'content'} */
}
