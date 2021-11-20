<?php

use Latte\Runtime as LR;

/** source: /var/www/html/IIS/app/LibraryModule/Presenters/templates/LibraryEdit.default.latte */
final class Template11f9c0314c extends Latte\Runtime\Template
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
		echo '<div id="library-edit">
	<div id="library-edit-back">
		<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Library:Library:", [$knihovna->ID])) /* line 4 */;
		echo '">Zpět</a>
	</div>
	<h1>Editace knihovny: ';
		echo LR\Filters::escapeHtmlText($knihovna->ID) /* line 6 */;
		echo '</h1>
	<div id="library-edit-formular">
';
		/* line 8 */ $_tmp = $this->global->uiControl->getComponent("libraryEditForm");
		if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		echo '	</div>
</div>
';
	}

}
