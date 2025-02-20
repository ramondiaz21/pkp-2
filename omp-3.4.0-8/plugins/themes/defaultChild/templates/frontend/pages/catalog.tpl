{include file="frontend/components/header.tpl" pageTitle="navigation.catalog"}
<script src="{$baseUrl}/plugins/themes/defaultChild/js/swiper-init.js"></script>

<div class="container">
    <div class="page page_catalog">
        {include file="frontend/components/breadcrumbs.tpl" currentTitleKey="navigation.catalog"}
        <h1>{translate key="navigation.catalog"}</h1>

        <div class="monograph_count">
            {translate key="catalog.browseTitles" numTitles=$total}
        </div>

        {* Series List *}
        {if $activeTheme->getOption('showCatalogSeriesListing') && $contextSeries|@count > 1}
            <nav class="pkp_series_nav_menu" role="navigation" aria-label="{translate key="series.series"}">
                <h2>{translate key="series.series"}:</h2>
                <ul>
                    {foreach name="seriesListLoop" from=$contextSeries item=series}
                        <li class="series_{$series->getId()}">
                            <a href="{url router=PKPApplication::ROUTE_PAGE page="catalog" op="series" path=$series->getPath()|escape}">{$series->getLocalizedTitle()|escape}</a>{if !$series@last}<span aria-hidden="true">{translate key="common.commaListSeparator"}</span>{/if}
                        </li>
                    {/foreach}
                </ul>
            </nav>
        {/if}

        {* No published titles *}
        {if !$publishedSubmissions|@count}
            <h2>{translate key="catalog.category.heading"}</h2>
            <p>{translate key="catalog.noTitles"}</p>
        {* Monograph List *}
        {else}
            {include file="frontend/components/monographList.tpl" monographs=$publishedSubmissions featured=$featuredMonographIds authorUserGroups=$authorUserGroups}
        {/if}

        {*
            Filtro para mostrar libros de la categoría "Romance"
        *}
        <div class="seccion-wrapper">
            <div class="swiper_title" style="">Romance</div>
        </div>
        {* No published titles in this category *}
        {if empty($publishedSubmissions)}
            <h2>
                {translate key="catalog.category.heading"}
            </h2>
            <p>{translate key="catalog.noTitles"}</p>
    
        {else}
    
            {* New releases *}
            {if !empty($newReleasesMonographs)}
                {include file="frontend/components/monographList.tpl" monographs=$newReleasesMonographs titleKey="catalog.newReleases" authorUserGroups=$authorUserGroups}
            {/if}
    
            {* All monographs *}
            {include file="frontend/components/monographList.tpl" monographs=$publishedSubmissions featured=$featuredMonographIds titleKey="catalog.category.heading"}
    
            {* Pagination *}
            {if $prevPage > 1}
                {capture assign=prevUrl}{url router=PKPApplication::ROUTE_PAGE page="catalog" op="category" path=$category->getPath()|to_array:$prevPage}{/capture}
            {elseif $prevPage === 1}
                {capture assign=prevUrl}{url router=PKPApplication::ROUTE_PAGE page="catalog" op="category" path=$category->getPath()}{/capture}
            {/if}
            {if $nextPage}
                {capture assign=nextUrl}{url router=PKPApplication::ROUTE_PAGE page="catalog" op="category" path=$category->getPath()|to_array:$nextPage}{/capture}
            {/if}
            {include
                file="frontend/components/pagination.tpl"
                prevUrl=$prevUrl
                nextUrl=$nextUrl
                showingStart=$showingStart
                showingEnd=$showingEnd
                total=$total
            }
        {/if}


        {* Pagination *}
        {if $prevPage > 1}
            {capture assign=prevUrl}{url router=PKPApplication::ROUTE_PAGE page="catalog" op="page" path=$prevPage}{/capture}
        {elseif $prevPage === 1}
            {capture assign=prevUrl}{url router=PKPApplication::ROUTE_PAGE page="catalog"}{/capture}
        {/if}
        {if $nextPage}
            {capture assign=nextUrl}{url router=PKPApplication::ROUTE_PAGE page="catalog" op="page" path=$nextPage}{/capture}
        {/if}
        {include file="frontend/components/pagination.tpl" prevUrl=$prevUrl nextUrl=$nextUrl showingStart=$showingStart showingEnd=$showingEnd total=$total}

    </div><!-- .page -->
</div>

{include file="frontend/components/footer.tpl"}
