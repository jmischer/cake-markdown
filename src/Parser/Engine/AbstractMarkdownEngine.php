<?php

namespace JMischer\CakeMarkdown\Parser\Engine;

use Cake\Core\InstanceConfigTrait;
use JMischer\CakeMarkdown\Parser\Markdown;

/**
 *
 * @author jmischer
 *        
 */
abstract class AbstractMarkdownEngine {
	Use InstanceConfigTrait;
	
	/**
	 * 
	 * @var array
	 */
	protected $_defaultConfig = [];
	
	
	/**
	 * 
	 * @var \JMischer\CakeMarkdown\Parser\Markdown
	 */
	protected $markdown;
	
	/**
	 * 
	 * @param Markdown $markdown
	 */
	public function __construct(Markdown $markdown) {
		$this->markdown = $markdown;
	}
	
	/**
	 * Implement to return the parsed output.
	 * 
	 * @param string $text
	 * @param Markdown $markdown
	 * @return string
	 */
	public abstract function output($text);
}

