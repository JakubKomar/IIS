<?php

use Latte\Runtime as LR;

/** source: /var/www/html/IIS/app/BookModule/Presenters/templates/Vyhledani.default.latte */
final class Template4183f476cd extends Latte\Runtime\Template
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
			foreach (array_intersect_key(['kniha' => '16'], $this->params) as $ʟ_v => $ʟ_l) {
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
		echo '<div id="book-hladanie">
	';
		if ($user->isAllowed('Knihy')) /* line 3 */ {
			echo '<div id="add-book"><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("BookAdd:")) /* line 3 */;
			echo '">Vytvořit nový titul</a></div>';
		}
		echo '
	<h1>Vyhledávání knih</h1>
	<div id="book-hladanie-formular">
';
		/* line 6 */ $_tmp = $this->global->uiControl->getComponent("vyhledaniForm");
		if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		echo '	</div>
	<div id="book-vyhladane">
';
		if ($knihy) /* line 9 */ {
			echo '		<table>
		<tr>
			<th>Titul</th>
			<th>Žánr/y</th>
			<th>Tagy/y</th>
		</tr>
';
			$iterations = 0;
			foreach ($knihy as $kniha) /* line 16 */ {
				echo '			<tr>
				<td><a href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Kniha:show", [$kniha->ID])) /* line 18 */;
				echo '">';
				echo LR\Filters::escapeHtmlText($kniha->ID) /* line 18 */;
				echo '</a></td>
				<td>';
				echo LR\Filters::escapeHtmlText($kniha->zanry) /* line 19 */;
				echo '</td>
				<td>';
				echo LR\Filters::escapeHtmlText($kniha->tagy) /* line 20 */;
				echo '</td>
			</tr>
';
				$iterations++;
			}
			echo '		</table>
';
		}
		echo '	</div>
</div>
';
	}

}
