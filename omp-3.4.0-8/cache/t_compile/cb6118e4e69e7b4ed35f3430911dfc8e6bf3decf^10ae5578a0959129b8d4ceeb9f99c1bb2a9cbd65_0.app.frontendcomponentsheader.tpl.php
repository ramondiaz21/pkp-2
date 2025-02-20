<?php
/* Smarty version 4.3.1, created on 2025-02-19 18:40:36
  from 'app:frontendcomponentsheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67b67a04b6a4e8_40573239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10ae5578a0959129b8d4ceeb9f99c1bb2a9cbd65' => 
    array (
      0 => 'app:frontendcomponentsheader.tpl',
      1 => 1739999342,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/headerHead.tpl' => 1,
  ),
),false)) {
function content_67b67a04b6a4e8_40573239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\pkp-2\\omp-3.4.0-8\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
 <?php $_smarty_tpl->_assignInScope('showingLogo', true);?> <?php if (!$_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value) {?> <?php $_smarty_tpl->_assignInScope('showingLogo', false);?> <?php }?> 
<!DOCTYPE html>
<html lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
"
xml:lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
"> <?php if (!$_smarty_tpl->tpl_vars['pageTitleTranslated']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "pageTitleTranslated", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['pageTitle']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?> <?php $_smarty_tpl->_subTemplateRender("app:frontend/components/headerHead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <body
class="pkp_page_<?php echo (($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value )) ?? null)===null||$tmp==='' ? "index" ?? null : $tmp);?>

pkp_op_<?php echo (($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedOp']->value )) ?? null)===null||$tmp==='' ? "index" ?? null : $tmp);
if ($_smarty_tpl->tpl_vars['showingLogo']->value) {?>
has_site_logo<?php }?>" dir="<?php echo (($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentLocaleLangDir']->value )) ?? null)===null||$tmp==='' ? "ltr" ?? null : $tmp);?>
">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<div class="pkp_structure_page">
  <header
    class="pkp_structure_head"
    id="headerNavigationContainer"
    role="banner"
  >
    <div class="cmp_skip_to_content" aria-label="Jump to content links">
      <a href="#pkp_content_main">Skip to main content</a>
      <a href="#siteNav">Skip to main navigation menu</a>
      <a href="#homepageSpotlights">Skip to spotlights</a>
      <a href="#homepageAnnouncements">Skip to announcements</a>
      <a href="#pkp_content_footer">Skip to site footer</a>
    </div>

    <div class="pkp_head_wrapper">
      <div class="pkp_site_name_wrapper">
        <button class="pkp_site_nav_toggle">
          <span>Open Menu</span>
        </button>
        <h1 class="pkp_screen_reader">COSITEC</h1>
        <div class="logo-button-wrapper">
          <div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/index.php/JRDO/" class="is_img">
              <img
                src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/plugins/themes/defaultChild/images/COSITEC.png"
                width="580"
                height="123"
                alt="COSITEC"
              />
            </a>
          </div>

          <div class="pkp_navigation_user_wrapper">
            <ul id="navigationUser" class=" pkp_nav_list">
              <li class="profile">
                <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/index.php/JRDO/user/register"
                  ><i class="fa fa-user-circle-o"></i> Registro</a
                >
              </li>
              <li class="profile">
                <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/index.php/JRDO/login"
                  ><i class="fa fa-sign-in"></i> Entrar</a
                >
              </li>
            </ul>
          </div>
        </div>

        <nav class="pkp_site_nav_menu" aria-label="Site Navigation">
          <a id="siteNav"></a>
          <div class="pkp_navigation_primary_row">
            <div class="pkp_navigation_primary_wrapper">
              <ul
                id="navigationPrimary"
                class="pkp_navigation_primary pkp_nav_list"
              >
                <li>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/index.php/JRDO"
                    ><i class="fa fa-home"></i> Inicio</a
                  >
                </li>
                <li>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/index.php/JRDO/catalog"
                    ><i class="fa fa-book"></i> Catalogo</a
                  >
                </li>
                <li>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/index.php/JRDO/announcement"
                    ><i class="fa fa-bell-o"></i> Anuncios</a
                  >
                </li>
                <li>
                  <a href="#" data-toggle="dropdown"
                    ><i class="fa fa-info-circle"></i> Acerca De</a
                  >
                  <ul class="dropdown-menu">
                    <li>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/index.php/JRDO/about">About the Press</a>
                    </li>
                    <li>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/index.php/JRDO/about/submissions"
                        >Submissions</a
                      >
                    </li>
                    <li>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/index.php/JRDO/about/editorialTeam"
                        >Editorial Team</a
                      >
                    </li>
                    <li>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/index.php/JRDO/about/privacy"
                        >Privacy Statement</a
                      >
                    </li>
                    <li>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/index.php/JRDO/about/contact">Contact</a>
                    </li>
                  </ul>
                </li>
              </ul>

              <form
                class="pkp_search pkp_search_desktop"
                action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/index.php/JRDO/search/search"
                method="get"
                role="search"
              >
                <input name="query" type="search" placeholder="Search" />
                <button class="cmp_button" type="submit">Search</button>
              </form>
              <!-- <div class="container">
                <div class="row">
                  <button class="btn btn-primary">prueba de bootstrap</button>
                </div>
              </div> -->
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>

   <?php if ($_smarty_tpl->tpl_vars['isFullWidth']->value) {?> <?php $_smarty_tpl->_assignInScope('hasSidebar', 0);?> <?php }?>
  <div class="pkp_structure_content<?php if ($_smarty_tpl->tpl_vars['hasSidebar']->value) {?> has_sidebar<?php }?>">
    <div class="pkp_structure_main" role="main">
      <a id="pkp_content_main"></a>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"><?php echo '</script'; ?>
>
<?php }
}
