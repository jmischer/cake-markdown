<?php

namespace JMischer\CakeMarkdown;

use Cake\Core\BasePlugin;

/**
 * Plugin for JMischer\CakeMarkdown
 */
class Plugin extends BasePlugin {
	/**
	 * Load routes or not
	 *
	 * @var bool
	 */
	protected $routesEnabled = false;
	
	/**
	 * Enable middleware
	 *
	 * @var bool
	 */
	protected $middlewareEnabled = false;
	
	/**
	 * Console middleware
	 *
	 * @var bool
	 */
	protected $consoleEnabled = false;
}
