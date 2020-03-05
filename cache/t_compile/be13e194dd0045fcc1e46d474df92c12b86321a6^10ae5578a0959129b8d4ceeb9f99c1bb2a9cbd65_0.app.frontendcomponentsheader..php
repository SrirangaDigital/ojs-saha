<?php
/* Smarty version 3.1.33, created on 2020-03-05 10:36:26
  from 'app:frontendcomponentsheader.' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e60d62a4528a7_09667862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10ae5578a0959129b8d4ceeb9f99c1bb2a9cbd65' => 
    array (
      0 => 'app:frontendcomponentsheader.',
      1 => 1580795841,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/headerHead.tpl' => 1,
  ),
),false)) {
function content_5e60d62a4528a7_09667862 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/ojs/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<!DOCTYPE html>
<html lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
" xml:lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
">
<?php if (!$_smarty_tpl->tpl_vars['pageTitleTranslated']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "pageTitleTranslated", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['pageTitle']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
$_smarty_tpl->_subTemplateRender("app:frontend/components/headerHead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value )) == "article") {?>
<body class="pkp_page_<?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value )))===null||$tmp==='' ? "index" : $tmp);?>
 pkp_op_<?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedOp']->value )))===null||$tmp==='' ? "index" : $tmp);?>
">
<?php } else { ?>
<body class="pkp_page_<?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value )))===null||$tmp==='' ? "index" : $tmp);?>
 pkp_op_<?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedOp']->value )))===null||$tmp==='' ? "index" : $tmp);?>
">
<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "homeUrl", null);?>
    <?php if ($_smarty_tpl->tpl_vars['currentJournal']->value && $_smarty_tpl->tpl_vars['multipleContexts']->value) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"index",'router'=>@constant('ROUTE_PAGE')),$_smarty_tpl ) );?>

    <?php } else { ?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('context'=>"index",'router'=>@constant('ROUTE_PAGE')),$_smarty_tpl ) );?>

    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<header class="site-header">
    <nav class="site-navbar-wraper navbar navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
	        <?php if ($_smarty_tpl->tpl_vars['currentContext']->value) {?>      
		    <div class="d-flex justify-content-between align-items-start" style="width:100%;">
		        <div class="d-flex justify-content-start align-items-start">
                            <div>
                                <?php if (($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value || is_array($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value)) && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value )) != "article") {?>
     	                            <div class="journal-logo" class="img-thumbnail">
            	       	                <?php if ($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value && is_array($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value)) {?>
                           	             <a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
" class="is_img journal-name navbar-brand test">
                               	                 <img src="<?php echo $_smarty_tpl->tpl_vars['publicFilesDir']->value;?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['uploadName'],"url" ));?>
"
                       	            	     	       width="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['width'] ));?>
" height="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['height'] ));?>
"
                                    	               <?php if ($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['altText'] != '') {?>alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['altText'] ));?>
"
                            	    	               <?php } else { ?>alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.pageHeaderLogo.altText"),$_smarty_tpl ) );?>
"<?php }?> />
			                     </a>
            	                         <?php } elseif ($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value && !$_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value && is_string($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value)) {?>
                       		             <a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
" class="is_text journal-name navbar-brand"><?php echo $_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value;?>
</a>
            	       		         <?php } elseif ($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value && !$_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value && is_array($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value)) {?>
                           	             <a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
" class="is_img journal-name navbar-brand">
                               	                 <img src="<?php echo $_smarty_tpl->tpl_vars['publicFilesDir']->value;?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value['uploadName'],"url" ));?>
"
                                    	              alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value['altText'] ));?>
" width="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value['width'] ));?>
"
                                    	              height="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value['height'] ));?>
"/>
				             </a>
            	                         <?php }?>
		                     </div>
			        <?php }?>
                            </div><!-- div containing the header logo !-->
  
	                    		   	    <div class="d-flex flex-column">
			        <div class="navbar-nav-scroll align-bottom">
                  	            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_menu'][0], array( array('name'=>"primary",'id'=>"navigationPrimary",'ulClass'=>"pkp_navigation_primary"),$_smarty_tpl ) );?>

              		        </div>
		                <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value )) != "article") {?>
		                    <div>
                    	                <form class="input-group" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"search",'op'=>"search"),$_smarty_tpl ) );?>
" method="post" role="search">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

                                            <input type="text" name="query" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['searchQuery']->value ));?>
" class="search-input-tag form-control"
                                                   placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.saha.search-text"),$_smarty_tpl ) );?>
" aria-label="Search">
                                      	    <span class="input-group-btn">
                                                <button class="btn btn-secondary search-btn"
                                                        type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.saha.search"),$_smarty_tpl ) );?>
</button>
                                            </span>
                                        </form>
			            </div>
		                <?php }?>
                            </div><!-- div containing the navigation and search bar !-->
	 	        </div>
                   		   <div class="ml-auto">
    		       <nav class="user-nav">
        	           <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_menu'][0], array( array('name'=>"user",'id'=>"navigationUser",'ulClass'=>"pkp_navigation_user",'liClass'=>"profile"),$_smarty_tpl ) );?>

    		       </nav>
		   </div>
	        <?php }?>
            </div>

        </div>
        <?php if (($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value && !$_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value && is_string($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value)) || call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value )) == "article") {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
" class="is_text journal-name navbar-brand"><?php echo $_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value;?>
</a>
        <?php }?>
	</div>
	</div>
    </nav>
    <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value )) != "article") {?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">

                </div>
            </div>
        </div>
    <?php }?>
</header>

<div class="site-content container<?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value )) == "article") {?>-fluid<?php }?>"><?php }
}
