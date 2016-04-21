<?php
/* Smarty version 3.1.29, created on 2016-04-21 07:11:32
  from "D:\Program Files\wamp\www\smarty\test\tpl\test.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571861041b9962_39681277',
  'file_dependency' => 
  array (
    'f226c4c435b5d2fd13e26d4ccf090f1890a1eb3d' => 
    array (
      0 => 'D:\\Program Files\\wamp\\www\\smarty\\test\\tpl\\test.tpl',
      1 => 1461215490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571861041b9962_39681277 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\Program Files\\wamp\\www\\smarty\\smarty\\plugins\\modifier.date_format.php';
$_smarty_tpl->compiled->nocache_hash = '3171857186104178549_95262532';
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['arr']->value,"%B %e %Y %H:%M:%S");
}
}
