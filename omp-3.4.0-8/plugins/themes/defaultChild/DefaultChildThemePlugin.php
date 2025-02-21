<?php

/**
 * @file DefaultChildThemePlugin.php
 *
 * Copyright (c) 2014-2023 Simon Fraser University
 * Copyright (c) 2003-2023 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class DefaultChildThemePlugin
 * @brief Example child theme plugin
 */

namespace APP\plugins\themes\defaultChild;

use PKP\plugins\ThemePlugin;

class DefaultChildThemePlugin extends ThemePlugin {
	/**
	 * Initialize the theme's styles, scripts and hooks. This is only run for
	 * the currently active theme.
	 *
	 * @return null
	 */
	public function init() {
		$this->setParent('defaultthemeplugin');
		$this->modifyStyle('stylesheet', ['addLess' => ['styles/global.less']]);
		$this->modifyStyle('stylesheet', ['addLess' => ['styles/remove-borders.less']]);
		$this->modifyStyle('stylesheet', ['addLess' => ['styles/catalog.less']]);
		$this->modifyStyle('stylesheet', ['addLess' => ['styles/login.less']]);
		$this->modifyStyle('stylesheet', ['addLess' => ['styles/register.less']]);
	}

	/**
	 * Get the display name of this plugin
	 * @return string
	 */
	public function getDisplayName() {
		return __('plugins.themes.defaultChild.name');
	}

	/**
	 * Get the description of this plugin
	 * @return string
	 */
	public function getDescription() {
		return __('plugins.themes.defaultChild.description');
	}
}

if (!PKP_STRICT_MODE) {
    class_alias('\APP\plugins\themes\defaultChild\DefaultChildThemePlugin', '\DefaultChildThemePlugin');
}
