<?php

use Latte\Runtime as LR;

/** source: /var/www/html/IIS/app/CoreModule/Presenters/templates/Homepage/default.latte */
final class Template3ffb517dc1 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '	<h1>Vítejte v knihovně.</h1>
	<h2><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Library:ViewLibraries:")) /* line 3 */;
		echo '">Naše knihovny</a></h2>
';
	}

}
