{**
 * templates/frontend/objects/monograph_summary.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Display a summary view of a monograph for display in lists
 *
 * @uses $monograph Monograph The monograph to be displayed
 * @uses $authorUserGroups Traversible The set of author user groups
 * @uses $isFeatured bool Is this a featured monograph?
 *}
 
 <div class="obj_monograph_summary cover-only">
    <a {if $press}href="{url press=$press->getPath() page="catalog" op="book" path=$monograph->getBestId()}"{else}href="{url page="catalog" op="book" path=$monograph->getBestId()}"{/if} class="cover">
        {assign var="coverImage" value=$monograph->getCurrentPublication()->getLocalizedData('coverImage')}
        <img src="{$monograph->getCurrentPublication()->getLocalizedCoverImageUrl($monograph->getData('contextId'))}"
     alt="{$coverImage.altText|escape|default:'Portada no disponible'}"
     class="large-cover">

    </a>
</div>
<!-- .obj_monograph_summary -->
