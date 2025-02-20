<?php
/* Smarty version 4.3.1, created on 2025-02-19 18:40:36
  from 'app:frontendpagesbook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67b67a0460fb24_30941439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fad89cb5a0797f0c714bbc0b3dbced067d74491e' => 
    array (
      0 => 'app:frontendpagesbook.tpl',
      1 => 1740010583,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/objects/chapter.tpl' => 1,
    'app:frontend/objects/monograph_full.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_67b67a0460fb24_30941439 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['isChapterRequest']->value) {?>
	<?php $_smarty_tpl->_assignInScope('pageTitle', $_smarty_tpl->tpl_vars['chapter']->value->getLocalizedFullTitle());
} else { ?>
	<?php $_smarty_tpl->_assignInScope('pageTitle', $_smarty_tpl->tpl_vars['publishedSubmission']->value->getLocalizedFullTitle());
}?>

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitleTranslated'=>$_smarty_tpl->tpl_vars['pageTitle']->value), 0, false);
?>

<div class="container">
    <div class="page page_book">
        <?php if ($_smarty_tpl->tpl_vars['isChapterRequest']->value) {?>
                        <?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/chapter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('monograph'=>$_smarty_tpl->tpl_vars['publishedSubmission']->value), 0, false);
?>
        <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/monograph_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('monograph'=>$_smarty_tpl->tpl_vars['publishedSubmission']->value), 0, false);
?>
        <?php }?>
    
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Catalog::Book::Footer::PageFooter"),$_smarty_tpl ) );?>

    </div><!-- .page -->
</div>


<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
