<?php

import('classes.handler.Handler');

class CatalogHandler extends Handler
{
    function categories()
    {
        $request = Application::get()->getRequest();
        $templateMgr = TemplateManager::getManager($request);
        $context = $request->getContext();

        // Obtener DAO de categorías
        $categoryDao = DAORegistry::getDAO('CategoryDAO');
        $contextId = $context->getId();
        $categories = $categoryDao->getByContextId($contextId)->toArray();

        // Pasar datos a la plantilla
        $templateMgr->assign('categories', $categories);
        $templateMgr->display('frontend/pages/catalog.tpl');
    }
}
