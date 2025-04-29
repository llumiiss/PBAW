<?php
/* Smarty version 5.4.2, created on 2025-04-22 00:01:31
  from 'file:application/views/templates/messages.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6806c03bb0add3_07740271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8700a033355e0fbaf0f6791c604fe86bf1809d1e' => 
    array (
      0 => 'application/views/templates/messages.tpl',
      1 => 1745267588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6806c03bb0add3_07740271 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Uni\\htdocs\\lmcalc06\\application\\views\\templates';
if ($_smarty_tpl->getValue('msgs')->isError()) {?>
<div class="messages err">
	<ol>
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getErrors(), 'err');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('err')->value) {
$foreach0DoElse = false;
?>
	<li><?php echo $_smarty_tpl->getValue('err');?>
</li>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</ol>
</div>
<?php }
if ($_smarty_tpl->getValue('msgs')->isInfo()) {?>
<div class="messages inf bottom-margin">
	<ol>
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getInfos(), 'inf');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('inf')->value) {
$foreach1DoElse = false;
?>
	<li><?php echo $_smarty_tpl->getValue('inf');?>
</li>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</ol>
</div>
<?php }
}
}
