<?php

import('classes.handler.Handler');

class CatalogHandler extends Handler
{
    function category($args, $request)
    {
        $categoryId = 2; // ID de la categoría "Romance"
        $context = $request->getContext();
        $pressId = $context->getId();

        // Obtener el DAO de categorías
        $categoryDao = DAORegistry::getDAO('CategoryDAO');
        $category = $categoryDao->getById($categoryId, $pressId);

        if (!$category) {
            // Manejar el caso donde la categoría no existe
            $request->redirect(null, 'catalog');
            return;
        }

        // Obtener las publicaciones de la categoría
        $publishedSubmissionDao = Application::getSubmissionDAO();
        $rangeInfo = $this->getRangeInfo($request, 'search');
        $publishedSubmissions = $publishedSubmissionDao->getByCategoryId($categoryId, $pressId, $rangeInfo);

        // Pasar los datos a la plantilla
        $templateMgr = TemplateManager::getManager($request);
        $templateMgr->assign('category', $category);
        $templateMgr->assign('publishedSubmissions', $publishedSubmissions->toArray());
        $templateMgr->display('frontend/pages/category.tpl');

        
    }

    
}
