<?php
/* Smarty version 5.4.2, created on 2025-04-22 00:01:31
  from 'file:application/views/templates/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6806c03ba53645_45790911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5834dd9662ccfbe77226c82e7088272269dc17ed' => 
    array (
      0 => 'application/views/templates/main.tpl',
      1 => 1744754737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6806c03ba53645_45790911 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Uni\\htdocs\\lmcalc06\\application\\views\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Credit Calculator</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->getValue('page_description') ?? null)===null||$tmp==='' ? 'Opis domyślny' ?? null : $tmp);?>
">
	<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="is-preload">

<!-- Header -->
<header id="header">
	<h1>Credit Calculator</h1>
	<p>Simple Credit calculator for your everyday business.<br />
	Made with templates from  <a href="http://html5up.net">HTML5UP</a></p>
</header>

<!-- Signup Form -->

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_7959965696806c03ba524e1_04787140', 'content');
?>


<!-- Footer -->
<footer id="footer" style="position: fixed; bottom: 0; left: 0; width: 100%; background: #111; color: #fff; padding: 1em 0; text-align: center; z-index: 1000;">
	<ul class="icons" style="margin: 0; padding: 0; list-style: none; display: flex; justify-content: center; gap: 1em;">
		<li><a href="https://www.instagram.com/llumiiss/" class="icon brands fa-instagram" style="color: #fff;"><span class="label">Instagram</span></a></li>
		<li><a href="https://github.com/llumiiss" class="icon brands fa-github" style="color: #fff;"><span class="label">GitHub</span></a></li>
		<li><a href="https://kudlacik.eu/projekty-php" class="icon fa-envelope" style="color: #fff;"><span class="label">Email</span></a></li>
	</ul>
	<ul class="copyright" style="margin-top: 0.5em; padding: 0; list-style: none; font-size: 0.8em;">
		<li>&copy; lumiiss</li>
		<li>Credits: <a href="http://html5up.net" style="color: #ccc;">HTML5 UP</a></li>
	</ul>
</footer>


<!-- Scripts -->
<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'content'} */
class Block_7959965696806c03ba524e1_04787140 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Uni\\htdocs\\lmcalc06\\application\\views\\templates';
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
