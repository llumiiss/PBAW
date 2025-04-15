<?php
/* Smarty version 5.4.2, created on 2025-04-15 18:56:17
  from 'file:application/views/calc.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67fe8fb12e67d6_88985656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '036f039233f12f7a4bd1149031b5a508d33ce96b' => 
    array (
      0 => 'application/views/calc.tpl',
      1 => 1744736010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67fe8fb12e67d6_88985656 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Uni\\htdocs\\lmcalc05\\application\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_7350468367fe8fb12cd099_12236123', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_7350468367fe8fb12cd099_12236123 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Uni\\htdocs\\lmcalc05\\application\\views';
?>


<section id="main" class="wrapper">

<div class="pure-g">
    <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
        <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
calcCompute" method="post">
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
    </div>

    <div class="l-box-lrg pure-u-1 pure-u-med-3-5">

                <?php if ($_smarty_tpl->getValue('msgs')->isError()) {?>
        <h4>Wystąpiły błędy: </h4>
        <ol class="err">
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
        <?php }?>

                <?php if ($_smarty_tpl->getValue('msgs')->isInfo()) {?>
        <h4>Informacje: </h4>
        <ol class="inf">
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
        <?php }?>

        <?php if ((null !== ($_smarty_tpl->getValue('res')->result ?? null))) {?>
        <h4>Wynik</h4>
        <p class="res">
            <?php echo $_smarty_tpl->getValue('res')->result;?>

        </p>
        <?php }?>


    </div>
</div>
</section>
<?php
}
}
/* {/block 'content'} */
}
