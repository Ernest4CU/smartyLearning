<?php
/* Smarty version 3.1.29, created on 2016-04-21 10:01:20
  from "D:\Program Files\wamp\www\smarty\test\tpl\showStr.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571888d001e818_39460136',
  'file_dependency' => 
  array (
    'e83c377228c2d6cf3b6e61ae93f3bd98c2203906' => 
    array (
      0 => 'D:\\Program Files\\wamp\\www\\smarty\\test\\tpl\\showStr.tpl',
      1 => 1461225675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571888d001e818_39460136 ($_smarty_tpl) {
if (!is_callable('smarty_block_test2')) require_once 'D:\\Program Files\\wamp\\www\\smarty\\smarty\\plugins\\block.test2.php';
$_smarty_tpl->compiled->nocache_hash = '3660571888cff1d4b4_90375782';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('test2', array('replace'=>'true','maxnum'=>29)); $_block_repeat=true; echo smarty_block_test2(array('replace'=>'true','maxnum'=>29), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo $_smarty_tpl->tpl_vars['showstr']->value;?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_test2(array('replace'=>'true','maxnum'=>29), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
