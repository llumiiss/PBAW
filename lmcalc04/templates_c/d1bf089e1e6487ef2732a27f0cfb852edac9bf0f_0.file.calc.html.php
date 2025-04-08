<?php
/* Smarty version 3.1.30, created on 2025-04-09 01:10:53
  from "D:\Uni\htdocs\lmcalc04\application\calc.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_67f5acfd3f71f6_70598053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1bf089e1e6487ef2732a27f0cfb852edac9bf0f' => 
    array (
      0 => 'D:\\Uni\\htdocs\\lmcalc04\\application\\calc.html',
      1 => 1744153849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/main.html' => 1,
  ),
),false)) {
function content_67f5acfd3f71f6_70598053 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104759810867f5acfd3f6b00_44685930', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../templates/main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_104759810867f5acfd3f6b00_44685930 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section id="main" class="wrapper">

<div class="pure-g">
    <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
        <form class="pure-form pure-form-stacked">
            <fieldset>

                <label for="id_quota">Quota: </label>
                <input id="id_quota" type="text" name="quota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->quota;?>
" placeholder="1,000-5,000,000(PLN)" /><br />
                <label for="id_time">Time:  </label>
                <input id="id_time" type="text" name="time" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->time;?>
" placeholder="For how long(months)(1-420)" /><br />
                <label for="id_stake">Stake: </label>
                <input id="id_stake" type="text" name="stake" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->stake;?>
" placeholder="0%-700%" /><br />
                <input type="submit" value="Calculate" />

            </fieldset>
        </form>
    </div>

    <div class="l-box-lrg pure-u-1 pure-u-med-3-5">

        
        <?php if (isset($_smarty_tpl->tpl_vars['messages']->value)) {?>
        <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
        <h4>Errors appear: </h4>
        <ol class="err">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ol>
        <?php }?>
        <?php }?>


        
        <?php if (isset($_smarty_tpl->tpl_vars['infos']->value)) {?>
        <?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?>
        <h4>Info: </h4>
        <ol class="inf">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ol>
        <?php }?>
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['result']->value)) {?>
        <h4>Result</h4>
        <p class="res">
            <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

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
