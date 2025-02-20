<?php
/* Smarty version 4.3.1, created on 2025-02-19 18:40:42
  from 'app:frontendcomponentsauthors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67b67a0af1abe1_51825259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e422e16f7d35e5f5427b8ca6c6e7ac113001c24c' => 
    array (
      0 => 'app:frontendcomponentsauthors.tpl',
      1 => 1732910672,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b67a0af1abe1_51825259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\pkp-2\\omp-3.4.0-8\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<div class="item authors">
	<h2 class="pkp_screen_reader">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.authors"),$_smarty_tpl ) );?>

	</h2>

		<?php  $_prefixVariable1 = $_smarty_tpl->tpl_vars['monograph']->value;
if ($_smarty_tpl->tpl_vars['monograph']->value->getWorkType() == $_prefixVariable1::WORK_TYPE_EDITED_VOLUME && smarty_modifier_count($_smarty_tpl->tpl_vars['editors']->value) && !$_smarty_tpl->tpl_vars['isChapterRequest']->value) {?>
		<?php $_smarty_tpl->_assignInScope('authors', $_smarty_tpl->tpl_vars['editors']->value);?>
		<?php $_smarty_tpl->_assignInScope('identifyAsEditors', true);?>
	<?php }?>

		<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['authors']->value) < 5) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['authors']->value, 'author');
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
?>
			<div class="sub_item">
				<div class="label">
					<?php if ($_smarty_tpl->tpl_vars['identifyAsEditors']->value) {?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.editorName",'editorName'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ))),$_smarty_tpl ) );?>

					<?php } else { ?>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));?>

					<?php }?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation()) {?>
					<div class="value">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation() ));?>

					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['author']->value->getOrcid()) {?>
					<span class="orcid">
						<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getOrcid() ));?>
" target="_blank">
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getOrcid() ));?>

						</a>
					</span>
				<?php }?>
			</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			<?php } else { ?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['authors']->value, 'author', false, NULL, 'authors', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_authors']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_authors']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_authors']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_authors']->value['total'];
?>
						<?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation()) {
if ($_smarty_tpl->tpl_vars['identifyAsEditors']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "authorName", null);?><span class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.editorName",'editorName'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ))),$_smarty_tpl ) );?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
} else {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "authorName", null);?><span class="label"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "authorAffiliation", null);?><span class="value"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation() ));?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.authorWithAffiliation",'name'=>$_smarty_tpl->tpl_vars['authorName']->value,'affiliation'=>$_smarty_tpl->tpl_vars['authorAffiliation']->value),$_smarty_tpl ) );
} else { ?><span class="label"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));?>
</span><?php }
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_authors']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_authors']->value['last'] : null)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.authorListSeparator"),$_smarty_tpl ) );
}?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
