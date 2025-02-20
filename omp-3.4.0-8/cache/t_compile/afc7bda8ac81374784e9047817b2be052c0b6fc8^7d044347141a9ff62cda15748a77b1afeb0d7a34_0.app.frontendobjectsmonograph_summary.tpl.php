<?php
/* Smarty version 4.3.1, created on 2025-02-19 18:43:08
  from 'app:frontendobjectsmonograph_summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67b67a9c5bfe34_63036371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d044347141a9ff62cda15748a77b1afeb0d7a34' => 
    array (
      0 => 'app:frontendobjectsmonograph_summary.tpl',
      1 => 1739921956,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b67a9c5bfe34_63036371 (Smarty_Internal_Template $_smarty_tpl) {
?> 
 <div class="obj_monograph_summary cover-only">
    <a <?php if ($_smarty_tpl->tpl_vars['press']->value) {?>href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('press'=>$_smarty_tpl->tpl_vars['press']->value->getPath(),'page'=>"catalog",'op'=>"book",'path'=>$_smarty_tpl->tpl_vars['monograph']->value->getBestId()),$_smarty_tpl ) );?>
"<?php } else { ?>href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"catalog",'op'=>"book",'path'=>$_smarty_tpl->tpl_vars['monograph']->value->getBestId()),$_smarty_tpl ) );?>
"<?php }?> class="cover">
        <?php $_smarty_tpl->_assignInScope('coverImage', $_smarty_tpl->tpl_vars['monograph']->value->getCurrentPublication()->getLocalizedData('coverImage'));?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['monograph']->value->getCurrentPublication()->getLocalizedCoverImageUrl($_smarty_tpl->tpl_vars['monograph']->value->getData('contextId'));?>
"
     alt="<?php echo (($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['coverImage']->value['altText'] )) ?? null)===null||$tmp==='' ? 'Portada no disponible' ?? null : $tmp);?>
"
     class="large-cover">

    </a>
</div>
<!-- .obj_monograph_summary -->
<?php }
}
