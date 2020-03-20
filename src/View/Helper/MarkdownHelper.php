<?php
namespace JMischer\CakeMarkdown\View\Helper;

use Cake\View\Helper;
use JMischer\CakeMarkdown\Parser\Markdown;

/**
 * 
 * @author jmischer
 *
 */
class MarkdownHelper extends Helper {
	/**
	 * 
	 * @var Markdown
	 */
	protected $markdown;
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \Cake\View\Helper::initialize()
	 */
	public function initialize($config) {
		$this->markdown = new Markdown($config);
	}
	
	/**
	 * 
	 * @param string $text
	 * @param array $options
	 * @return string
	 */
	public function parse($text, array $options = []) {
		return $this->markdown->parse($text, $options);
	}
}

