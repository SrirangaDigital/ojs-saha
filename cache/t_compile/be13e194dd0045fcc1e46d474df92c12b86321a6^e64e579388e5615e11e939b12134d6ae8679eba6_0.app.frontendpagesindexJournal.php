<?php
/* Smarty version 3.1.33, created on 2020-03-05 10:36:26
  from 'app:frontendpagesindexJournal' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e60d62a423e05_45333182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e64e579388e5615e11e939b12134d6ae8679eba6' => 
    array (
      0 => 'app:frontendpagesindexJournal',
      1 => 1580795841,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/objects/issue_slider.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_5e60d62a423e05_45333182 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/ojs/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/var/www/html/ojs/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),2=>array('file'=>'/var/www/html/ojs/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitleTranslated'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentJournal']->value->getLocalizedName() ))), 0, false);
?>

<div class="page_index_journal">
    <div class="index-page-content">
        <div class="row">
            <div class="col-md-8">
                <?php if ($_smarty_tpl->tpl_vars['homepageImage']->value) {?>
                    <div class="row">
 		        <div class="homepage-image-wrapper col-md-12">
                            <img class="img-fluid homepage_image" src="<?php echo $_smarty_tpl->tpl_vars['publicFilesDir']->value;?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homepageImage']->value['uploadName'] ));?>
" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homepageImageAltText']->value ));?>
">
                        </div>
		    </div>
                <?php }?>
                <div class="row">
		    <?php if ($_smarty_tpl->tpl_vars['announcements']->value) {?>
 		        <div class="announcements-title col-md-12">
                            <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"announcement.announcements"),$_smarty_tpl ) );?>
</h3>
			</div>
		    	<ul class="row list-announce pl-3">
		            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'announcement');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
?>
			        <li>
				    <span class="announcement_title">
				        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"announcement",'op'=>"view",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getId() ))),$_smarty_tpl ) );?>
">
					    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getLocalizedTitle() ));?>

					</a>
				    </span>
				    <span class="announcement_date"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format($_smarty_tpl->tpl_vars['announcement']->value->getDatePosted(),$_smarty_tpl->tpl_vars['dateFormatLong']->value) ));?>
</span>
            			    <span class="summary">
                		        <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['announcement']->value->getLocalizedDescriptionShort()),120,"...");?>

					<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"announcement",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['announcement']->value->getId()),$_smarty_tpl ) );?>
" class="readmore"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.readMore"),$_smarty_tpl ) );?>
</a>
            			    </span>
			        </li>
			    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		        </ul>
		    <?php }?>
		    <?php if ($_smarty_tpl->tpl_vars['publishedArticles']->value) {?>
                    <div class="recent-articles-section-title col-md-12">
                        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.saha.latest"),$_smarty_tpl ) );?>
</h3>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['publishedArticles']->value, 'article', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['article']->value) {
?>
                        <div class="recent-wrapper col-md-6">
                            <div class="card">
                                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['article']->value->getBestArticleId()),$_smarty_tpl ) );?>
">
                                    <img class="card-img-top" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageUrl() ));?>
">
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a class="recent-article-title"
                                           href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['article']->value->getBestArticleId()),$_smarty_tpl ) );?>
">
                                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle() ));?>

                                        </a>
                                    </h4>
                                    <p class="card-text">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getAuthors(), 'author', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['author']->value) {
?>
                                            <span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getLocalizedFamilyName() ));?>

                                                <?php if ($_smarty_tpl->tpl_vars['k']->value < (count($_smarty_tpl->tpl_vars['article']->value->getAuthors())-1)) {?>
                                                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['author']->value->getLocalizedGivenName(),"/(?<=\w)\w+/",".,") ));?>

                                                <?php } else { ?>
                                                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['author']->value->getLocalizedGivenName(),"/(?<=\w)\w+/",".") ));?>

                                                <?php }?></span>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">
                                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getSectionTitle() ));?>

                                        |
                                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value->getDatePublished(),"%Y-%m-%d");?>

                                    </small>
                                </div>
                            </div>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		    <?php }?>
                </div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Index::journal"),$_smarty_tpl ) );?>

            </div>
            <div class="col-md-4">
                <?php if (empty($_smarty_tpl->tpl_vars['isFullWidth']->value)) {?>
		    <?php if ($_smarty_tpl->tpl_vars['showSummary']->value && $_smarty_tpl->tpl_vars['journalDescription']->value) {?>
		        <div class="journalDescription">
			    <?php echo $_smarty_tpl->tpl_vars['journalDescription']->value;?>

		        </div>
	            <?php }?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "sidebarCode", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Sidebar"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <?php if ($_smarty_tpl->tpl_vars['sidebarCode']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['latestIssues']->value) {?>
                            <?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/issue_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php }?>
                        <div class="pkp_structure_sidebar information" role="complementary"
                             aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.sidebar"),$_smarty_tpl ) ) ));?>
">
                            <?php echo $_smarty_tpl->tpl_vars['sidebarCode']->value;?>

                        </div>
                    <?php }?>
		    <?php if ($_smarty_tpl->tpl_vars['additionalHomeContent']->value) {?>
		        <div class="additional_content">
			    <?php echo $_smarty_tpl->tpl_vars['additionalHomeContent']->value;?>

			</div>
		    <?php }?>
                <?php }?>
            </div>
        </div>
    </div>
</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
