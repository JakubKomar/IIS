<?php

use Latte\Runtime as LR;

/** source: /var/www/html/IIS/app/LibraryModule/Presenters/templates/ViewLibraries.default.latte */
final class Templatea35fc1cab1 extends Latte\Runtime\Template
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
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['knihovna' => '7'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '<div id="libraries-view">
	<h1>Naše knihovny</h1>
	<div id="libraries-list">
';
		if ($knihovny) /* line 5 */ {
			echo '			<ol>
';
			$iterations = 0;
			foreach ($knihovny as $knihovna) /* line 7 */ {
				echo '				<div class="knihovnaItem">
					<li><a href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("ViewLibrary:", [$knihovna->ID])) /* line 9 */;
				echo '">';
				echo LR\Filters::escapeHtmlText($knihovna->ID) /* line 9 */;
				echo '</a></li>
				</div>
';
				$iterations++;
			}
			echo '			</ol>
';
		}
		echo '	</div>
</div>
';
	}

}
