<?php

use Latte\Runtime as LR;

/** source: /var/www/html/IIS/app/CoreModule/Presenters/templates/@layout.latte */
final class Templateaa414da975 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		0 => ['scripts' => 'blockScripts'],
		'snippet' => ['all' => 'blockAll'],
	];


	public function main(): array
	{
		extract($this->params);
		echo '<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 6 */;
		echo '/style.css">
	<title>Knihovna</title>
</head>

<body>
	<div class="allContentent"';
		echo ' id="' . htmlspecialchars($this->global->snippetDriver->getHtmlId('all')) . '"';
		echo '>
';
		$this->renderBlock('all', [], null, 'snippet');
		echo '	</div>
';
		$this->renderBlock('scripts', get_defined_vars()) /* line 16 */;
		echo '
	<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 19 */;
		echo '/js/Naja.js" type="module"></script>
	<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 20 */;
		echo '/js/main.js"></script>
</body>
</html>
';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['flash' => '14'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block scripts} on line 16 */
	public function blockScripts(array $ʟ_args): void
	{
		echo '	<script src="https://nette.github.io/resources/js/3/netteForms.min.js"></script>
';
	}


	/** {snippet all} on line 11 */
	public function blockAll(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->global->snippetDriver->enter("all", 'static');
		try {
			echo '		';
			$this->createTemplate('Layout/Navigation.latte', $this->params, "include")->renderToContentType('html', "Navigation") /* line 12 */;
			echo "\n";
			$this->renderBlock('content', [], 'html') /* line 13 */;
			$iterations = 0;
			foreach ($flashes as $flash) /* line 14 */ {
				echo '		<div';
				echo ($ʟ_tmp = array_filter(['flash', $flash->type])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 14 */;
				echo '>';
				echo LR\Filters::escapeHtmlText($flash->message) /* line 14 */;
				echo '</div>
';
				$iterations++;
			}
		}
		finally {
			$this->global->snippetDriver->leave();
		}
		
	}

}
