<?php
/* Smarty version 3.1.39, created on 2024-09-06 03:30:52
  from 'C:\xampp\htdocs\crm\ui\theme\ibilling\sections\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66daafac9aec39_21400900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8798d8f91b8ac88e1d07a18be24949f1e066d55' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\ui\\theme\\ibilling\\sections\\header.tpl',
      1 => 1621318798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66daafac9aec39_21400900 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplheader']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
if ($_smarty_tpl->tpl_vars['content_inner']->value != '') {?>
    <?php echo $_smarty_tpl->tpl_vars['content_inner']->value;?>

<?php }
}
}
