<?php
/* Smarty version 3.1.33, created on 2020-03-05 10:36:22
  from 'app:commonfooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e60d626643c96_19303332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbcce7a01814639a93468a9fe1bef302b11672f4' => 
    array (
      0 => 'app:commonfooter.tpl',
      1 => 1575681927,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'core:common/footer.tpl' => 1,
  ),
),false)) {
function content_5e60d626643c96_19303332 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('brandImage', "templates/images/ojs_brand.png");
$_smarty_tpl->_assignInScope('packageKey', "common.openJournalSystems");
$_smarty_tpl->_assignInScope('pkpLink', "http://pkp.sfu.ca/ojs");
$_smarty_tpl->_subTemplateRender("core:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
