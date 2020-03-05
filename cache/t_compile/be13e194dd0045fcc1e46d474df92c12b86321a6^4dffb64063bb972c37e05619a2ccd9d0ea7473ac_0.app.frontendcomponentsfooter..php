<?php
/* Smarty version 3.1.33, created on 2020-03-05 10:36:26
  from 'app:frontendcomponentsfooter.' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e60d62a4c5f02_69427613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dffb64063bb972c37e05619a2ccd9d0ea7473ac' => 
    array (
      0 => 'app:frontendcomponentsfooter.',
      1 => 1580795841,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e60d62a4c5f02_69427613 (Smarty_Internal_Template $_smarty_tpl) {
?></div> <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value )) != "article") {?>
    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col footer-left col-5">
		   <?php echo $_smarty_tpl->tpl_vars['pageFooter']->value;?>

                </div>
                <div class="col footer-right col-7 d-flex align-items-center">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['pkpLink']->value;?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/plugins/themes/saha/images/ojs-open-journal-systems-icon.png" alt="Open Journals Systems"></img>
                    </a>
                    <a href="https://www.lib.uchicago.edu/">
		        <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/plugins/themes/saha/images/uc-logo.png" alt="University of Chicago Libraries"></img>
                    </a>
                </div>
            </div>
        </div>
    </div><!-- pkp_structure_footer_wrapper -->
<?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_script'][0], array( array('context'=>"frontend",'scripts'=>$_smarty_tpl->tpl_vars['scripts']->value),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Footer::PageFooter"),$_smarty_tpl ) );?>

</body>
</html>
<?php }
}
