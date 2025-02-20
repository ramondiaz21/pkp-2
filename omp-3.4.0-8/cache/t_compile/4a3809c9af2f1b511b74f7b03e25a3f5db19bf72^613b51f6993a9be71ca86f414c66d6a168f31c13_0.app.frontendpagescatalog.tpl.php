<?php
/* Smarty version 4.3.1, created on 2025-02-20 12:06:47
  from 'app:frontendpagescatalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67b76f37affb24_57585508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '613b51f6993a9be71ca86f414c66d6a168f31c13' => 
    array (
      0 => 'app:frontendpagescatalog.tpl',
      1 => 1740074806,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs.tpl' => 1,
    'app:frontend/components/monographList.tpl' => 3,
    'app:frontend/components/pagination.tpl' => 2,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_67b76f37affb24_57585508 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\pkp-2\\omp-3.4.0-8\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"navigation.catalog"), 0, false);
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/plugins/themes/defaultChild/js/swiper-init.js"><?php echo '</script'; ?>
>

<div class="container">
    <div class="page page_catalog">
        <?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>"navigation.catalog"), 0, false);
?>
        <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.catalog"),$_smarty_tpl ) );?>
</h1>

        <div class="monograph_count">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"catalog.browseTitles",'numTitles'=>$_smarty_tpl->tpl_vars['total']->value),$_smarty_tpl ) );?>

        </div>

                <?php if ($_smarty_tpl->tpl_vars['activeTheme']->value->getOption('showCatalogSeriesListing') && smarty_modifier_count($_smarty_tpl->tpl_vars['contextSeries']->value) > 1) {?>
            <nav class="pkp_series_nav_menu" role="navigation" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"series.series"),$_smarty_tpl ) );?>
">
                <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"series.series"),$_smarty_tpl ) );?>
:</h2>
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contextSeries']->value, 'series', true, NULL, 'seriesListLoop', array (
));
$_smarty_tpl->tpl_vars['series']->iteration = 0;
$_smarty_tpl->tpl_vars['series']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['series']->value) {
$_smarty_tpl->tpl_vars['series']->do_else = false;
$_smarty_tpl->tpl_vars['series']->iteration++;
$_smarty_tpl->tpl_vars['series']->last = $_smarty_tpl->tpl_vars['series']->iteration === $_smarty_tpl->tpl_vars['series']->total;
$__foreach_series_0_saved = $_smarty_tpl->tpl_vars['series'];
?>
                        <li class="series_<?php echo $_smarty_tpl->tpl_vars['series']->value->getId();?>
">
                            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>PKPApplication::ROUTE_PAGE,'page'=>"catalog",'op'=>"series",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['series']->value->getPath() ))),$_smarty_tpl ) );?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['series']->value->getLocalizedTitle() ));?>
</a><?php if (!$_smarty_tpl->tpl_vars['series']->last) {?><span aria-hidden="true"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.commaListSeparator"),$_smarty_tpl ) );?>
</span><?php }?>
                        </li>
                    <?php
$_smarty_tpl->tpl_vars['series'] = $__foreach_series_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </nav>
        <?php }?>

                <?php if (!smarty_modifier_count($_smarty_tpl->tpl_vars['publishedSubmissions']->value)) {?>
            <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"catalog.category.heading"),$_smarty_tpl ) );?>
</h2>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"catalog.noTitles"),$_smarty_tpl ) );?>
</p>
                <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("app:frontend/components/monographList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('monographs'=>$_smarty_tpl->tpl_vars['publishedSubmissions']->value,'featured'=>$_smarty_tpl->tpl_vars['featuredMonographIds']->value,'authorUserGroups'=>$_smarty_tpl->tpl_vars['authorUserGroups']->value), 0, false);
?>
        <?php }?>

                <div class="seccion-wrapper">
            <div class="swiper_title" style="">Romance</div>
        </div>
                <?php if (empty($_smarty_tpl->tpl_vars['publishedSubmissions']->value)) {?>
            <h2>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"catalog.category.heading"),$_smarty_tpl ) );?>

            </h2>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"catalog.noTitles"),$_smarty_tpl ) );?>
</p>
    
        <?php } else { ?>
    
                        <?php if (!empty($_smarty_tpl->tpl_vars['newReleasesMonographs']->value)) {?>
                <?php $_smarty_tpl->_subTemplateRender("app:frontend/components/monographList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('monographs'=>$_smarty_tpl->tpl_vars['newReleasesMonographs']->value,'titleKey'=>"catalog.newReleases",'authorUserGroups'=>$_smarty_tpl->tpl_vars['authorUserGroups']->value), 0, true);
?>
            <?php }?>
    
                        <?php $_smarty_tpl->_subTemplateRender("app:frontend/components/monographList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('monographs'=>$_smarty_tpl->tpl_vars['publishedSubmissions']->value,'featured'=>$_smarty_tpl->tpl_vars['featuredMonographIds']->value,'titleKey'=>"catalog.category.heading"), 0, true);
?>
    
                        <?php if ($_smarty_tpl->tpl_vars['prevPage']->value > 1) {?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'prevUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>PKPApplication::ROUTE_PAGE,'page'=>"catalog",'op'=>"category",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->getPath(),$_smarty_tpl->tpl_vars['prevPage']->value ))),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['prevPage']->value === 1) {?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'prevUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>PKPApplication::ROUTE_PAGE,'page'=>"catalog",'op'=>"category",'path'=>$_smarty_tpl->tpl_vars['category']->value->getPath()),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['nextPage']->value) {?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'nextUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>PKPApplication::ROUTE_PAGE,'page'=>"catalog",'op'=>"category",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->getPath(),$_smarty_tpl->tpl_vars['nextPage']->value ))),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender("app:frontend/components/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prevUrl'=>$_smarty_tpl->tpl_vars['prevUrl']->value,'nextUrl'=>$_smarty_tpl->tpl_vars['nextUrl']->value,'showingStart'=>$_smarty_tpl->tpl_vars['showingStart']->value,'showingEnd'=>$_smarty_tpl->tpl_vars['showingEnd']->value,'total'=>$_smarty_tpl->tpl_vars['total']->value), 0, false);
?>
        <?php }?>


                <?php if ($_smarty_tpl->tpl_vars['prevPage']->value > 1) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'prevUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>PKPApplication::ROUTE_PAGE,'page'=>"catalog",'op'=>"page",'path'=>$_smarty_tpl->tpl_vars['prevPage']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['prevPage']->value === 1) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'prevUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>PKPApplication::ROUTE_PAGE,'page'=>"catalog"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['nextPage']->value) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'nextUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>PKPApplication::ROUTE_PAGE,'page'=>"catalog",'op'=>"page",'path'=>$_smarty_tpl->tpl_vars['nextPage']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("app:frontend/components/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prevUrl'=>$_smarty_tpl->tpl_vars['prevUrl']->value,'nextUrl'=>$_smarty_tpl->tpl_vars['nextUrl']->value,'showingStart'=>$_smarty_tpl->tpl_vars['showingStart']->value,'showingEnd'=>$_smarty_tpl->tpl_vars['showingEnd']->value,'total'=>$_smarty_tpl->tpl_vars['total']->value), 0, true);
?>

    </div><!-- .page -->
</div>

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
