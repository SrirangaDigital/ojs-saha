<?php
/* Smarty version 3.1.33, created on 2020-03-05 10:37:09
  from 'app:frontendpagesissueArchive' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e60d655bda1a0_07943606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d55f24f7dbae142b911fdb30617e900a52af9a4' => 
    array (
      0 => 'app:frontendpagesissueArchive',
      1 => 1580795841,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/objects/issue_summary.tpl' => 1,
    'app:frontend/components/pagination.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_5e60d655bda1a0_07943606 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "pageTitle", null);?>
	<?php if ($_smarty_tpl->tpl_vars['prevPage']->value) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"archive.archivesPageNumber",'pageNumber'=>$_smarty_tpl->tpl_vars['prevPage']->value+1),$_smarty_tpl ) );?>

	<?php } else { ?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"archive.archives"),$_smarty_tpl ) );?>

	<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitleTranslated'=>$_smarty_tpl->tpl_vars['pageTitle']->value), 0, false);
?>

<div class="page page_issue_archive">
    <h2>Archive of past issues</h2>
		<?php if (empty($_smarty_tpl->tpl_vars['issues']->value)) {?>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"current.noCurrentIssueDesc"),$_smarty_tpl ) );?>
</p>

		<?php } else { ?>
		<div class="row">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['issues']->value, 'issue');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['issue']->value) {
?>
				<div class="issue-block news-block col-sm-6 col-md-6 col-lg-4">
					<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/issue_summary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
				</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>

				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "prevUrl", null);?>
			<?php if ($_smarty_tpl->tpl_vars['prevPage']->value > 1) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"issue",'op'=>"archive",'path'=>$_smarty_tpl->tpl_vars['prevPage']->value),$_smarty_tpl ) );?>

			<?php } elseif ($_smarty_tpl->tpl_vars['prevPage']->value === 1) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"issue",'op'=>"archive"),$_smarty_tpl ) );?>

			<?php }?>
		<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "nextUrl", null);?>
			<?php if ($_smarty_tpl->tpl_vars['nextPage']->value) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"issue",'op'=>"archive",'path'=>$_smarty_tpl->tpl_vars['nextPage']->value),$_smarty_tpl ) );?>

			<?php }?>
		<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prevUrl'=>$_smarty_tpl->tpl_vars['prevUrl']->value,'nextUrl'=>$_smarty_tpl->tpl_vars['nextUrl']->value,'showingStart'=>$_smarty_tpl->tpl_vars['showingStart']->value,'showingEnd'=>$_smarty_tpl->tpl_vars['showingEnd']->value,'total'=>$_smarty_tpl->tpl_vars['total']->value), 0, false);
?>
	<?php }?>
</div>

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
