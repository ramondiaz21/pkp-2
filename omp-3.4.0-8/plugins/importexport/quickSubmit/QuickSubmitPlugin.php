<?php

/**
 * @file QuickSubmitPlugin.inc.php
 *
 * Copyright (c) 2013-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file LICENSE.
 *
 * @class QuickSubmitPlugin
 *
 * @ingroup plugins_importexport_quickSubmit
 *
 * @brief Quick Submit one-page submission plugin
 */

namespace APP\plugins\importexport\quickSubmit;

use APP\notification\NotificationManager;
use APP\template\TemplateManager;
use BadMethodCallException;
use PKP\core\JSONMessage;
use PKP\notification\PKPNotification;

class QuickSubmitPlugin extends \PKP\plugins\ImportExportPlugin
{
    /**
     * @copydoc Plugin::register()
     *
     * @param null|mixed $mainContextId
     */
    public function register($category, $path, $mainContextId = null)
    {
        $success = parent::register($category, $path, $mainContextId);
        $this->addLocaleData();

        return $success;
    }

    /**
     * @copydoc Plugin::getName()
     */
    public function getName()
    {
        return 'QuickSubmitPlugin';
    }

    /**
     * @copydoc Plugin::getDisplayName()
     */
    public function getDisplayName()
    {
        return __('plugins.importexport.quickSubmit.displayName');
    }

    /**
     * @copydoc Plugin::getDescription()
     */
    public function getDescription()
    {
        return __('plugins.importexport.quickSubmit.description');
    }

    /**
     * @copydoc ImportExportPlugin::display()
     */
    public function display($args, $request)
    {
        $templateMgr = TemplateManager::getManager();
        $templateMgr->registerPlugin('function', 'plugin_url', [$this, 'smartyPluginUrl']);
        $templateMgr->assign('quickSubmitPlugin', $this);

        switch (array_shift($args)) {
            case 'saveSubmit':
                if ($request->getUserVar('reloadForm') == '1') {
                    $this->_reloadForm($request);
                } else {
                    $this->_saveSubmit($request);
                }
                break;
            case 'cancelSubmit':
                $this->_cancelSubmit($request);
                break;
            case 'uploadCoverImage':
                return $this->_showFileUploadForm($request);
            case 'uploadImage':
                return $this->_uploadImage($request);
            case 'saveUploadedImage':
                return $this->_saveUploadedImage($request);
            case 'deleteCoverImage':
                return $this->_deleteUploadedImage($request);
            default:
                $form = new QuickSubmitForm($this, $request);
                $form->initData();
                $form->display($request);
                break;
        }
    }

    /**
     * Cancels the submission
     *
     * @param $request Request
     */
    protected function _cancelSubmit($request)
    {
        $form = new QuickSubmitForm($this, $request);
        $form->readInputData();

        $form->cancel();

        // Submission removal notification.
        $notificationContent = __('notification.removedSubmission');
        $currentUser = $request->getUser();
        $notificationMgr = new NotificationManager();
        $notificationMgr->createTrivialNotification($currentUser->getId(), PKPNotification::NOTIFICATION_TYPE_SUCCESS, ['contents' => $notificationContent]);

        $templateMgr = TemplateManager::getManager($request);
        $templateMgr->display($this->getTemplateResource('submitCancel.tpl'));
    }

    /**
     * Show the upload image form.
     *
     * @param $request Request
     *
     * @return JSONMessage JSON object
     */
    protected function _showFileUploadForm($request)
    {
        $imageUploadForm = new classes\form\UploadImageForm($this, $request);
        $imageUploadForm->initData($request);
        return new JSONMessage(true, $imageUploadForm->fetch($request));
    }

    /**
     * Upload the image to a temporary file
     *
     * @param $request Request
     *
     * @return JSONMessage JSON object
     */
    protected function _uploadImage($request)
    {
        $imageUploadForm = new classes\form\UploadImageForm($this, $request);
        $imageUploadForm->readInputData();

        $temporaryFileId = $imageUploadForm->uploadFile($request);
        if ($temporaryFileId) {
            $json = new JSONMessage(true);
            $json->setAdditionalAttributes([
                'temporaryFileId' => $temporaryFileId
            ]);
            return $json;
        } else {
            return new JSONMessage(false, __('common.uploadFailed'));
        }
    }

    /**
     * Save the new image file.
     *
     * @param $request Request.
     *
     * @return JSONMessage JSON object
     */
    protected function _saveUploadedImage($request)
    {
        $imageUploadForm = new classes\form\UploadImageForm($this, $request);
        $imageUploadForm->readInputData();
        return $imageUploadForm->execute($request);
    }

    /**
     * Delete the uploaded image
     *
     * @param $request Request.
     *
     * @return JSONMessage JSON object
     */
    protected function _deleteUploadedImage($request)
    {
        $imageUploadForm = new classes\form\UploadImageForm($this, $request);
        $imageUploadForm->readInputData();
        return $imageUploadForm->deleteCoverImage($request);
    }

    /**
     * Save the submitted form
     *
     * @param $request Request.
     */
    protected function _saveSubmit($request)
    {
        $templateMgr = TemplateManager::getManager($request);
        $form = new QuickSubmitForm($this, $request);
        $form->readInputData();
        if ($form->validate()) {
            $form->execute();
            $templateMgr->assign([
                'submissionId' => $form->getSubmission()->getId(),
                'stageId' => WORKFLOW_STAGE_ID_PRODUCTION,
            ]);
            $templateMgr->display($this->getTemplateResource('submitSuccess.tpl'));
        } else {
            $form->display($request);
        }
    }

    /**
     * Reloads the form
     *
     * @param $request Request.
     */
    protected function _reloadForm($request)
    {
        $templateMgr = TemplateManager::getManager($request);
        $form = new QuickSubmitForm($this, $request);
        $form->readInputData();
        $form->display($request);
    }

    /**
     * Extend the {url ...} for smarty to support this plugin.
     */
    public function smartyPluginUrl($params, $smarty)
    {
        $path = ['plugin',$this->getName()];
        if (is_array($params['path'])) {
            $params['path'] = array_merge($path, $params['path']);
        } elseif (!empty($params['path'])) {
            $params['path'] = array_merge($path, [$params['path']]);
        } else {
            $params['path'] = $path;
        }

        if (!empty($params['id'])) {
            $params['path'] = array_merge($params['path'], [$params['id']]);
            unset($params['id']);
        }
        return $smarty->smartyUrl($params, $smarty);
    }

    /**
     * @copydoc ImportExportPlugin::executeCLI
     */
    public function executeCLI($scriptName, &$args)
    {
        throw new BadMethodCallException();
    }

    /**
     * @copydoc ImportExportPlugin::usage
     */
    public function usage($scriptName)
    {
        throw new BadMethodCallException();
    }

    /**
     * Define the appropriate import filter given the imported XML file path
     *
     * @param string $xmlFile
     *
     * @return array Containing the filter and the xmlString of the imported file
     */
    public function getImportFilter($xmlFile)
    {
        throw new BadMethodCallException();
    }

    /**
     * Define the appropriate export filter given the export operation
     *
     * @param string $exportType
     *
     * @return string
     */
    public function getExportFilter($exportType)
    {
        throw new BadMethodCallException();
    }

    /**
     * Get the application specific deployment object
     *
     * @param Context $context
     * @param User $user
     *
     * @return PKPImportExportDeployment
     */
    public function getAppSpecificDeployment($context, $user)
    {
        throw new BadMethodCallException();
    }
}
