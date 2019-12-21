<?php
use Cake\Event\Event;
use Cake\Event\EventManager;

EventManager::instance()->on('Controller.initialize', function (Event $event) {
	/**
	 * 
	 * @var \Cake\Controller\Controller $controller
	 */
	$controller = $event->getSubject();
	if ($controller->components()->has('RequestHandler')) {
		$controller->RequestHandler->setConfig('viewClassMap.md', 
				'JMischer/CakeMarkdown.Markdown');
		$controller->response->setTypeMap('md', 'text/html');
	}
});