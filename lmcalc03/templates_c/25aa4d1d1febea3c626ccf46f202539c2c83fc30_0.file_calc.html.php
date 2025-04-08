<?php
/* Smarty version 5.4.2, created on 2025-04-08 02:19:57
  from 'file:D:\Uni\htdocs\lmcalc03/application/calc.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67f46bade83529_63057464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25aa4d1d1febea3c626ccf46f202539c2c83fc30' => 
    array (
      0 => 'D:\\Uni\\htdocs\\lmcalc03/application/calc.html',
      1 => 1744071588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67f46bade83529_63057464 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Uni\\htdocs\\lmcalc03\\application';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_108291736667f46bade60079_45944635', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.html", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_108291736667f46bade60079_45944635 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Uni\\htdocs\\lmcalc03\\application';
?>


<section id="main" class="wrapper">
    
<div class="pure-g">
    <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
        <form class="pure-form pure-form-stacked">
            <fieldset>

                <label for="id_quota">Quota: </label>
                <input id="id_quota" type="text" name="quota" value="<?php echo $_smarty_tpl->getValue('form')['quota'];?>
" placeholder="1,000-5,000,000(PLN)" /><br />
                <label for="id_time">Time:  </label>
                <input id="id_time" type="text" name="time" value="<?php echo $_smarty_tpl->getValue('form')['time'];?>
" placeholder="For how long(months)(1-420)" /><br />
                <label for="id_stake">Stake: </label>
                <input id="id_stake" type="text" name="stake" value="<?php echo $_smarty_tpl->getValue('form')['stake'];?>
" placeholder="0%-700%" /><br />
                <input type="submit" value="Calculate" />

            </fieldset>
        </form>
    </div>

    <div class="l-box-lrg pure-u-1 pure-u-med-3-5">

                <?php if ((null !== ($_smarty_tpl->getValue('messages') ?? null))) {?>
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?>
        <h4>Errors appear: </h4>
        <ol class="err">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
            <li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ol>
        <?php }?>
        <?php }?>


                <?php if ((null !== ($_smarty_tpl->getValue('infos') ?? null))) {?>
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('infos')) > 0) {?>
        <h4>Info: </h4>
        <ol class="inf">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('infos'), 'msg');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach1DoElse = false;
?>
            <li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ol>
        <?php }?>
        <?php }?>

        <?php if ((null !== ($_smarty_tpl->getValue('month_quot') ?? null))) {?>
        <h4>Result</h4>
        <p class="res">
            <?php echo $_smarty_tpl->getValue('month_quot');?>

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
