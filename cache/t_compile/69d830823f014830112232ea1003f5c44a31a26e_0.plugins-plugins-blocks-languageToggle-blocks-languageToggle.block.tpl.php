<?php
/* Smarty version 3.1.33, created on 2020-03-05 10:36:26
  from 'plugins-plugins-blocks-languageToggle-blocks-languageToggle:block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e60d62a4b1353_64472348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69d830823f014830112232ea1003f5c44a31a26e' => 
    array (
      0 => 'plugins-plugins-blocks-languageToggle-blocks-languageToggle:block.tpl',
      1 => 1575681927,
      2 => 'plugins-plugins-blocks-languageToggle-blocks-languageToggle',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e60d62a4b1353_64472348 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['enableLanguageToggle']->value) {?>
<div class="pkp_block block_language">
	<span class="title">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.language"),$_smarty_tpl ) );?>

	</span>

	<div class="content">
		<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languageToggleLocales']->value, 'localeName', false, 'localeKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['localeKey']->value => $_smarty_tpl->tpl_vars['localeName']->value) {
?>
				<li class="locale_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['localeKey']->value ));
if ($_smarty_tpl->tpl_vars['localeKey']->value == $_smarty_tpl->tpl_vars['currentLocale']->value) {?> current<?php }?>" lang="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['localeKey']->value ));?>
">
					<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"user",'op'=>"setLocale",'path'=>$_smarty_tpl->tpl_vars['localeKey']->value,'source'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
						<?php echo $_smarty_tpl->tpl_vars['localeName']->value;?>

					</a>
				</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
</div><!-- .block_language -->
<?php }
}
}
