<?php
/* Smarty version 3.1.33, created on 2020-03-05 10:37:15
  from 'app:controllersgridgridHeader' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e60d65b76e748_25627195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3c3df9522cf3bd04329e738db71e205816ab237' => 
    array (
      0 => 'app:controllersgridgridHeader',
      1 => 1575681981,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/grid/gridActionsAbove.tpl' => 1,
  ),
),false)) {
function content_5e60d65b76e748_25627195 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="header">

	<?php if ($_smarty_tpl->tpl_vars['grid']->value->getTitle()) {?>
		<h4>
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( $_smarty_tpl->tpl_vars['grid']->value->getTitle() ));?>

		</h4>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['grid']->value->getActions(@constant('GRID_ACTION_POSITION_ABOVE'))) {?>
		<?php if ($_smarty_tpl->tpl_vars['grid']->value->getActions(@constant('GRID_ACTION_POSITION_ABOVE'))) {?>
			<?php $_smarty_tpl->_subTemplateRender("app:controllers/grid/gridActionsAbove.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('actions'=>$_smarty_tpl->tpl_vars['grid']->value->getActions(@constant('GRID_ACTION_POSITION_ABOVE')),'gridId'=>$_smarty_tpl->tpl_vars['staticId']->value), 0, false);
?>
		<?php }?>
	<?php }?>
</div>

<?php echo $_smarty_tpl->tpl_vars['gridFilterForm']->value;?>

<?php }
}
