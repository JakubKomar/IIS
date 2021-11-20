<?php

use Latte\Runtime as LR;

/** source: /var/www/html/IIS/app/BookTransactionModule/Presenters/templates/LibBooks.default.latte */
final class Templatebacee3f9e3 extends Latte\Runtime\Template
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
			foreach (array_intersect_key(['book' => '19'], $this->params) as $ʟ_v => $ʟ_l) {
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
		echo '<div id="lib-books">
	<div id="lib-books-back">
		<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Library:Library:", [$libName])) /* line 4 */;
		echo '">Zpět</a>
	</div>
	<h1>Knihy v knihovně:';
		echo LR\Filters::escapeHtmlText($libName) /* line 6 */;
		echo '</h1>
	<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Order:Orders:", [$libName])) /* line 7 */;
		echo '">Přehled objednávek</a>
	<br><br>
	<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("LibBookManualAdd:", [$libName])) /* line 9 */;
		echo '">Přidat titul manuálně do knihovny</a>
	<div class="medzera"></div>
	<table id="lib-books-table">
	<tr>
		<th>Jméno titulu</th>
		<th>Celkový počet</th>
		<th>Aktuálně půjčeno</th>
		<th>K dispozici</th>
		<th>Editace počtu</th>
	</tr>
';
		$iterations = 0;
		foreach ($books as $book) /* line 19 */ {
			echo '		<tr>
			<td>';
			echo LR\Filters::escapeHtmlText($book->ID) /* line 21 */;
			echo '</td>
			<td>';
			echo LR\Filters::escapeHtmlText($book->mnozstvi) /* line 22 */;
			echo '</td>
			<td>';
			echo LR\Filters::escapeHtmlText($book->vydano) /* line 23 */;
			echo '</td>
			<td>';
			echo LR\Filters::escapeHtmlText($book->mnozstvi-$book->vydano) /* line 24 */;
			echo '</td>
			<td><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("LibBookManualEdit:", [$libName,$book->ID])) /* line 25 */;
			echo '">Editovat</a></td>
		</tr>
';
			$iterations++;
		}
		echo '	</table>
</div>
';
	}

}
