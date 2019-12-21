<?php

namespace JMischer\CakeMarkdown\Parser;

use JMischer\CakeMarkdown\Parser\Engine\AbstractMarkdownEngine;
use JMischer\CakeMarkdown\Parser\Engine\CebeMarkdownParser;

/**
 *
 * @author jmischer
 *        
 */
class Markdown {
	/**
	 * 
	 * @var AbstractMarkdownEngine
	 */
	private $_engine;
	
	/**
	 * 
	 * @param Markdown $markdown
	 */
	public function __construct(array $options = []) {
		// Initialize Markdown engine
		$this->initEngine($options);
	}
	
	/**
	 * 
	 */
	protected function initEngine($engine = []) {
		$this->_engine = new CebeMarkdownParser($this);
		$this->_engine->setConfig($engine);
	}
	
	/**
	 * 
	 * @return \JMischer\CakeMarkdown\Parser\Engine\AbstractMarkdownEngine
	 */
	public function getEngine() {
		return $this->_engine;
	}
	
	/**
	 * 
	 * @param string $text
	 * @return string
	 */
	public function parse($text) {
		return $this->getEngine()->output($text);
	}
}

