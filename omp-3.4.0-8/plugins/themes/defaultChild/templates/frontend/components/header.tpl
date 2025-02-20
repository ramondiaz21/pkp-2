{** * lib/pkp/templates/frontend/components/header.tpl * * Copyright (c)
2014-2021 Simon Fraser University * Copyright (c) 2003-2021 John Willinsky *
Distributed under the GNU GPL v3. For full terms see the file docs/COPYING. * *
@brief Common frontend site header. * * @uses $isFullWidth bool Should this page
be displayed without sidebars? This * represents a page-level override, and
doesn't indicate whether or not * sidebars have been configured for thesite. *}
{strip} {* Determine whether a logo or title string is being displayed *}
{assign var="showingLogo" value=true} {if !$displayPageHeaderLogo} {assign
var="showingLogo" value=false} {/if} {/strip}
<!DOCTYPE html>
<html lang="{$currentLocale|replace:"_":"-"}"
xml:lang="{$currentLocale|replace:"_":"-"}"> {if !$pageTitleTranslated}{capture
assign="pageTitleTranslated"}{translate key=$pageTitle}{/capture}{/if} {include
file="frontend/components/headerHead.tpl"} <body
class="pkp_page_{$requestedPage|escape|default:"index"}
pkp_op_{$requestedOp|escape|default:"index"}{if $showingLogo}
has_site_logo{/if}" dir="{$currentLocaleLangDir|escape|default:"ltr"}">
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
            <a href="{$baseUrl}/index.php/JRDO/" class="is_img">
              <img
                src="{$baseUrl}/plugins/themes/defaultChild/images/COSITEC.png"
                width="580"
                height="123"
                alt="COSITEC"
              />
            </a>
          </div>

          <div class="pkp_navigation_user_wrapper">
            <ul id="navigationUser" class=" pkp_nav_list">
              <li class="profile">
                <a href="{$baseUrl}/index.php/JRDO/user/register"
                  ><i class="fa fa-user-circle-o"></i> Registro</a
                >
              </li>
              <li class="profile">
                <a href="{$baseUrl}/index.php/JRDO/login"
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
                  <a href="{$baseUrl}/index.php/JRDO"
                    ><i class="fa fa-home"></i> Inicio</a
                  >
                </li>
                <li>
                  <a href="{$baseUrl}/index.php/JRDO/catalog"
                    ><i class="fa fa-book"></i> Catalogo</a
                  >
                </li>
                <li>
                  <a href="{$baseUrl}/index.php/JRDO/announcement"
                    ><i class="fa fa-bell-o"></i> Anuncios</a
                  >
                </li>
                <li>
                  <a href="#" data-toggle="dropdown"
                    ><i class="fa fa-info-circle"></i> Acerca De</a
                  >
                  <ul class="dropdown-menu">
                    <li>
                      <a href="{$baseUrl}/index.php/JRDO/about">About the Press</a>
                    </li>
                    <li>
                      <a href="{$baseUrl}/index.php/JRDO/about/submissions"
                        >Submissions</a
                      >
                    </li>
                    <li>
                      <a href="{$baseUrl}/index.php/JRDO/about/editorialTeam"
                        >Editorial Team</a
                      >
                    </li>
                    <li>
                      <a href="{$baseUrl}/index.php/JRDO/about/privacy"
                        >Privacy Statement</a
                      >
                    </li>
                    <li>
                      <a href="{$baseUrl}/index.php/JRDO/about/contact">Contact</a>
                    </li>
                  </ul>
                </li>
              </ul>

              <form
                class="pkp_search pkp_search_desktop"
                action="{$baseUrl}/index.php/JRDO/search/search"
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

  {* Wrapper for page content and sidebars *} {if $isFullWidth} {assign
  var=hasSidebar value=0} {/if}
  <div class="pkp_structure_content{if $hasSidebar} has_sidebar{/if}">
    <div class="pkp_structure_main" role="main">
      <a id="pkp_content_main"></a>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
