<?php

namespace JMischer\CakeMarkdown\Parser\Engine;

use JMischer\CakeMarkdown\Parser\Markdown;


/**
 *
 * @author jmischer
 *        
 */
class CebeMarkdownParser extends AbstractMarkdownEngine {
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \JMischer\CakeMarkdown\Parser\Engine\AbstractMarkdownEngine::output()
	 */
	public function output($text, Markdown $markdown, array $options = []) {
		$parser = $this->createParser();
		return $parser->parse($text);
	}
	
	/**
	 * 
	 * @param array $options
	 * @return \cebe\markdown\Markdown
	 */
	public function createParser(array $options = []) {
		$parser = new \cebe\markdown\MarkdownExtra();
		return $parser;
	}
}
