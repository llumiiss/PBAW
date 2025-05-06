<?php
/* Smarty version 5.4.2, created on 2025-04-22 01:46:42
  from 'file:application/views/calc.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6806d8e25fc5d8_59394519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f167efcd35af5419b3a34acd2651447b8686e5ed' => 
    array (
      0 => 'application/views/calc.tpl',
      1 => 1745279032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/templates/messages.tpl' => 1,
  ),
))) {
function content_6806d8e25fc5d8_59394519 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Uni\\htdocs\\lmcalc06\\application\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_3708105886806d8e25d8c05_82023509', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "application/views/templates/main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_3708105886806d8e25d8c05_82023509 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Uni\\htdocs\\lmcalc06\\application\\views';
?>


<section id="main" class="wrapper">

    <div class="pure-menu pure-menu-horizontal bottom-margin">
        <a href="index.php?action=logout" class="pure-menu-heading pure-menu-link">Logout</a>
        <span style="float:right;">użytkownik: <?php echo $_smarty_tpl->getValue('user')->login;?>
, rola: <?php echo $_smarty_tpl->getValue('user')->role;?>
</span>


    </div>
        <form class="pure-form pure-form-stacked" action="index.php?action=calcCompute" method="post">
            <fieldset>

                <label for="id_quota">Quota: </label>
                <input id="id_quota" type="text" name="quota" value="<?php echo $_smarty_tpl->getValue('form')->quota;?>
" placeholder="1,000-5,000,000(PLN)" /><br />
                <label for="id_time">Time:  </label>
                <input id="id_time" type="text" name="time" value="<?php echo $_smarty_tpl->getValue('form')->time;?>
" placeholder="For how long(months)(1-420)" /><br />
                <label for="id_stake">Stake: </label>
                <input id="id_stake" type="text" name="stake" value="<?php echo $_smarty_tpl->getValue('form')->stake;?>
" placeholder="0%-700%" /><br />
                <input type="submit" value="Calculate" />

            </fieldset>
        </form>

    <?php $_smarty_tpl->renderSubTemplate('file:application/views/templates/messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <div class="l-box-lrg pure-u-1 pure-u-med-3-5">
        <?php if ((null !== ($_smarty_tpl->getValue('res')->month_quot ?? null))) {?>
            <div class="messages inf">
                Wynik: <?php echo $_smarty_tpl->getValue('res')->month_quot;?>

            </div>
        <?php }?>

</section>
<?php
}
}
/* {/block 'content'} */
}
