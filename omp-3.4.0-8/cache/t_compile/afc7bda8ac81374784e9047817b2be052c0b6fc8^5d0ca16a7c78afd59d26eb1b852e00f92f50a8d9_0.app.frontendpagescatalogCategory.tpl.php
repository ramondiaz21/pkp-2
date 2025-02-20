<?php
/* Smarty version 4.3.1, created on 2025-02-20 11:21:20
  from 'app:frontendpagescatalogCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67b76490b94397_90081165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d0ca16a7c78afd59d26eb1b852e00f92f50a8d9' => 
    array (
      0 => 'app:frontendpagescatalogCategory.tpl',
      1 => 1740072079,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs_catalog.tpl' => 1,
    'app:frontend/components/monographList.tpl' => 2,
    'app:frontend/components/pagination.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_67b76490b94397_90081165 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\pkp-2\\omp-3.4.0-8\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitleTranslated'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->getLocalizedTitle() ))), 0, false);
?>
<div class="container">


<div class="page page_catalog_category">

		<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs_catalog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"category",'parent'=>$_smarty_tpl->tpl_vars['parentCategory']->value,'currentTitle'=>$_smarty_tpl->tpl_vars['category']->value->getLocalizedTitle()), 0, false);
?>
	<h1><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->getLocalizedTitle() ));?>
</h1>

		<div class="monograph_count">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"catalog.browseTitles",'numTitles'=>$_smarty_tpl->tpl_vars['total']->value),$_smarty_tpl ) );?>

	</div>

		<?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['category']->value->getImage());?>
	<?php $_smarty_tpl->_assignInScope('description', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->getLocalizedDescription() )));?>
	<div class="about_section<?php if ($_smarty_tpl->tpl_vars['image']->value) {?> has_image<?php }
if ($_smarty_tpl->tpl_vars['description']->value) {?> has_description<?php }?>">
		<?php if ($_smarty_tpl->tpl_vars['image']->value) {?>
			<div class="cover" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>PKPApplication::ROUTE_PAGE,'page'=>"catalog",'op'=>"fullSize",'type'=>"category",'id'=>$_smarty_tpl->tpl_vars['category']->value->getId()),$_smarty_tpl ) );?>
">
				<img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>PKPApplication::ROUTE_PAGE,'page'=>"catalog",'op'=>"thumbnail",'type'=>"category",'id'=>$_smarty_tpl->tpl_vars['category']->value->getId()),$_smarty_tpl ) );?>
" alt="<?php echo (($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->getLocalizedTitle() )) ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" />
			</div>
		<?php }?>
		<div class="description">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['description']->value ));?>

		</div>
	</div>

	<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['subcategories']->value)) {?>
	<nav class="subcategories" role="navigation">
		<h2>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"catalog.category.subcategories"),$_smarty_tpl ) );?>

		</h2>
		<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subcategories']->value, 'subcategory');
$_smarty_tpl->tpl_vars['subcategory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->do_else = false;
?>
				<li>
					<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"category",'path'=>$_smarty_tpl->tpl_vars['subcategory']->value->getPath()),$_smarty_tpl ) );?>
">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value->getLocalizedTitle() ));?>

					</a>
				</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</nav>
	<?php }?>

		<?php if (empty($_smarty_tpl->tpl_vars['publishedSubmissions']->value)) {?>
		<h2>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"catalog.category.heading"),$_smarty_tpl ) );?>

		</h2>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"catalog.noTitles"),$_smarty_tpl ) );?>
</p>

	<?php } else { ?>

				<?php if (!empty($_smarty_tpl->tpl_vars['newReleasesMonographs']->value)) {?>
			<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/monographList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('monographs'=>$_smarty_tpl->tpl_vars['newReleasesMonographs']->value,'titleKey'=>"catalog.newReleases",'authorUserGroups'=>$_smarty_tpl->tpl_vars['authorUserGroups']->value), 0, false);
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

</div><!-- .page -->
</div>
<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
