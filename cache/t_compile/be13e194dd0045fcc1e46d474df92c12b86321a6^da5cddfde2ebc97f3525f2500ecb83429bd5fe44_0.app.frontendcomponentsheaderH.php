<?php
/* Smarty version 3.1.33, created on 2020-03-05 10:36:26
  from 'app:frontendcomponentsheaderH' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e60d62a45c6e7_78113614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da5cddfde2ebc97f3525f2500ecb83429bd5fe44' => 
    array (
      0 => 'app:frontendcomponentsheaderH',
      1 => 1575681981,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e60d62a45c6e7_78113614 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
	<meta charset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['defaultCharset']->value ));?>
">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['pageTitleTranslated']->value);?>

				<?php if ((($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value )))===null||$tmp==='' ? "index" : $tmp) != 'index' && $_smarty_tpl->tpl_vars['currentContext']->value && $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedName()) {?>
			| <?php echo $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedName();?>

		<?php }?>
	</title>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_header'][0], array( array('context'=>"frontend"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_stylesheet'][0], array( array('context'=>"frontend"),$_smarty_tpl ) );?>

</head>
<?php }
}
