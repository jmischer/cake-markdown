<?php
namespace JMischer\CakeMarkdown\View\Helper;

use Cake\View\Helper;
use JMischer\CakeMarkdown\Parser\Markdown;

class MarkdownHelper extends Helper {
	public function parse($text, array $options = []) {
		$md = new Markdown($options);
		return $md->parse($text);
	}
}

