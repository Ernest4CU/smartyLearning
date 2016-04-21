<?php
/* Smarty version 3.1.29, created on 2016-04-21 09:16:49
  from "D:\Program Files\wamp\www\smarty\test\tpl\area.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57187e61681344_79104933',
  'file_dependency' => 
  array (
    '0963ba0b7e3927afed9f75e59d86bce30a8ad9b2' => 
    array (
      0 => 'D:\\Program Files\\wamp\\www\\smarty\\test\\tpl\\area.tpl',
      1 => 1461223006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57187e61681344_79104933 ($_smarty_tpl) {
if (!is_callable('smarty_function_test')) require_once 'D:\\Program Files\\wamp\\www\\smarty\\smarty\\plugins\\function.test.php';
$_smarty_tpl->compiled->nocache_hash = '2622557187e6165a2b2_01776324';
?>

<?php echo smarty_function_test(array('width'=>$_smarty_tpl->tpl_vars['conf']->value['width'],'height'=>$_smarty_tpl->tpl_vars['conf']->value['height']),$_smarty_tpl);
}
}
