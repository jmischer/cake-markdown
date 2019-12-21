<?php

namespace JMischer\CakeMarkdown\View;

use Cake\Core\Configure;
use Cake\View\View;
use JMischer\CakeMarkdown\Parser\Markdown;

/**
 *
 * @author jmischer
 *        
 */
class MarkdownView extends View {
	/**
	 * 
	 * @var \JMischer\CakeMarkdown\Parser\Markdown
	 */
	private $_parser;
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \Cake\View\View::initialize()
	 */
	public function initialize() {
		parent::initialize();
		
		// Initialize parser
		$this->initParser((array) Configure::read('CakeMarkdown'));
	}
	
	protected function _evaluate($viewFile, $dataForView) {
		$output = parent::_evaluate($viewFile, $dataForView);
		if (in_array($this->_currentType, [View::TYPE_TEMPLATE, View::TYPE_ELEMENT])) {
			$output = $this->parse($output);
		}
		return $output;
	}
	/**
	 * 
	 * @param array $options
	 */
	protected function initParser(array $options = []) {
		$this->_parser = new Markdown($options);
	}
	
	/**
	 * 
	 * @param string $text
	 * @return string
	 */
	public function parse($text) {
		return $this->getParser()->parse($text);
	}
	
	/**
	 * 
	 * @return \JMischer\CakeMarkdown\Parser\Markdown
	 */
	public function getParser() {
		return $this->_parser;
	}
}

