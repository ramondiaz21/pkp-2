<?php
/* Smarty version 4.3.1, created on 2025-02-19 18:43:08
  from 'app:frontendcomponentsmonographList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67b67a9c30bc07_67155158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1740c2ec5409f96edca701e7e6e1d6b1d15d687f' => 
    array (
      0 => 'app:frontendcomponentsmonographList.tpl',
      1 => 1739912223,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/objects/monograph_summary.tpl' => 2,
  ),
),false)) {
function content_67b67a9c30bc07_67155158 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['heading']->value) {?>
	<?php $_smarty_tpl->_assignInScope('heading', "h2");
}
if (!$_smarty_tpl->tpl_vars['titleKey']->value) {?>
	<?php $_smarty_tpl->_assignInScope('monographHeading', $_smarty_tpl->tpl_vars['heading']->value);
} elseif ($_smarty_tpl->tpl_vars['heading']->value == 'h2') {?>
	<?php $_smarty_tpl->_assignInScope('monographHeading', "h3");
} elseif ($_smarty_tpl->tpl_vars['heading']->value == 'h3') {?>
	<?php $_smarty_tpl->_assignInScope('monographHeading', "h4");
} else { ?>
	<?php $_smarty_tpl->_assignInScope('monographHeading', "h5");
}?>

<div class="cmp_monographs_list swiper-container mySwiper">
    <?php if ($_smarty_tpl->tpl_vars['titleKey']->value) {?>
        <<?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
 class="title title-ramon">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['titleKey']->value),$_smarty_tpl ) );?>

        </<?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
>
    <?php }?>

    <!-- Swiper Wrapper -->
    <div class="swiper-wrapper mySwiper" pagination="true" pagination-clickable="true" navigation="true" space-between="30"
    centered-slides="true" autoplay-delay="2000" autoplay-disable-on-interaction="false">
        <?php $_smarty_tpl->_assignInScope('counter', 1);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['monographs']->value, 'monograph', false, NULL, 'monographListLoop', array (
));
$_smarty_tpl->tpl_vars['monograph']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['monograph']->value) {
$_smarty_tpl->tpl_vars['monograph']->do_else = false;
?>
            <?php if (is_array($_smarty_tpl->tpl_vars['featured']->value) && array_key_exists($_smarty_tpl->tpl_vars['monograph']->value->getId(),$_smarty_tpl->tpl_vars['featured']->value)) {?>
                <?php $_smarty_tpl->_assignInScope('isFeatured', true);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('isFeatured', false);?>
            <?php }?>
            <div class="swiper-slide">
                <?php if ($_smarty_tpl->tpl_vars['isFeatured']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/monograph_summary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('monograph'=>$_smarty_tpl->tpl_vars['monograph']->value,'isFeatured'=>$_smarty_tpl->tpl_vars['isFeatured']->value,'heading'=>$_smarty_tpl->tpl_vars['monographHeading']->value,'authorUserGroups'=>$_smarty_tpl->tpl_vars['authorUserGroups']->value), 0, true);
?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/monograph_summary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('monograph'=>$_smarty_tpl->tpl_vars['monograph']->value,'isFeatured'=>$_smarty_tpl->tpl_vars['isFeatured']->value,'heading'=>$_smarty_tpl->tpl_vars['monographHeading']->value), 0, true);
?>
                <?php }?>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

    <!-- Paginación y navegación -->
    <!-- <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div> -->
</div>


<?php }
}
