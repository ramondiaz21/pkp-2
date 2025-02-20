<header class="pkp_structure_head" id="headerNavigationContainer" role="banner">
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
            <div class="pkp_site_name">
                <a href="https://tudominio.com" class="is_img">
                    <img src="{$baseUrl}/plugins/themes/defaultChild/images/COSITEC.png" width="580" height="123" alt="COSITEC">
                </a>
            </div>
        </div>

        <nav class="pkp_site_nav_menu" aria-label="Site Navigation">
            <a id="siteNav"></a>
            <div class="pkp_navigation_primary_row">
                <div class="pkp_navigation_primary_wrapper">
                    <ul id="navigationPrimary" class="pkp_navigation_primary pkp_nav_list">
                        <li><a href="{$baseUrl}/index.php/library"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="{$baseUrl}/library/catalog"><i class="fa fa-book"></i> Catalog</a></li>
                        <li><a href="{$baseUrl}/library/announcement"><i class="fa fa-bell-o"></i> Announcements</a></li>
                        <li>
                            <a href="#" data-toggle="dropdown"><i class="fa fa-info-circle"></i> About</a>
                            <ul class="dropdown-menu">
                                <li><a href="{$baseUrl}/library/about">About the Press</a></li>
                                <li><a href="{$baseUrl}/library/about/submissions">Submissions</a></li>
                                <li><a href="{$baseUrl}/library/about/editorialTeam">Editorial Team</a></li>
                                <li><a href="{$baseUrl}/library/about/privacy">Privacy Statement</a></li>
                                <li><a href="{$baseUrl}/library/about/contact">Contact</a></li>
                            </ul>
                        </li>
                    </ul>
                    
                    <form class="pkp_search pkp_search_desktop" action="{$baseUrl}/library/search/search" method="get" role="search">
                        <input name="query" type="search" placeholder="Search">
                        <button class="cmp_button" type="submit">Search</button>
                    </form>
                </div>
            </div>

            <div class="pkp_navigation_user_wrapper">
                <ul id="navigationUser" class="pkp_navigation_user pkp_nav_list">
                    <li class="profile"><a href="{$baseUrl}/library/user/register"><i class="fa fa-user-circle-o"></i> Register</a></li>
                    <li class="profile"><a href="{$baseUrl}/library/login"><i class="fa fa-sign-in"></i> Login</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
