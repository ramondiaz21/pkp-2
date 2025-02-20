{**
 * templates/frontend/components/monographList.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Display a list of monographs.
 *
 * @uses $monographs array List of monographs to display
 * @uses $featured array Optional list of monograph IDs to feature in the list
 * @uses $titleKey string Optional translation key for a title for the list
 * @uses $heading string HTML heading element, default: h2
 *}
{if !$heading}
	{assign var="heading" value="h2"}
{/if}
{if !$titleKey}
	{assign var="monographHeading" value=$heading}
{elseif $heading == 'h2'}
	{assign var="monographHeading" value="h3"}
{elseif $heading == 'h3'}
	{assign var="monographHeading" value="h4"}
{else}
	{assign var="monographHeading" value="h5"}
{/if}

<div class="cmp_monographs_list swiper-container mySwiper">
    {if $titleKey}
        <{$heading} class="title title-ramon">
            {translate key=$titleKey}
        </{$heading}>
    {/if}

    <!-- Swiper Wrapper -->
    <div class="swiper-wrapper mySwiper" pagination="true" pagination-clickable="true" navigation="true" space-between="30"
    centered-slides="true" autoplay-delay="2000" autoplay-disable-on-interaction="false">
        {assign var=counter value=1}
        {foreach name="monographListLoop" from=$monographs item=monograph}
            {if is_array($featured) && array_key_exists($monograph->getId(), $featured)}
                {assign var="isFeatured" value=true}
            {else}
                {assign var="isFeatured" value=false}
            {/if}
            <div class="swiper-slide">
                {if $isFeatured}
                    {include file="frontend/objects/monograph_summary.tpl" monograph=$monograph isFeatured=$isFeatured heading=$monographHeading authorUserGroups=$authorUserGroups}
                {else}
                    {include file="frontend/objects/monograph_summary.tpl" monograph=$monograph isFeatured=$isFeatured heading=$monographHeading}
                {/if}
            </div>
        {/foreach}
    </div>

    <!-- Paginación y navegación -->
    <!-- <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div> -->
</div>


