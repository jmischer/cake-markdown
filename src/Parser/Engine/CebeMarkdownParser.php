<?php

namespace JMischer\CakeMarkdown\Parser\Engine;


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
	public function output($text) {
		$parser = new \cebe\markdown\MarkdownExtra();
// 		$parser->html5 = $options['html5'];
// 		$parser->keepListStartNumber = $options['keepListStartNumber'];
		return $parser->parse($text);
	}
}
