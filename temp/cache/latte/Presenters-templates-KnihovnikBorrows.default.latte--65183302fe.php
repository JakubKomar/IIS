<?php

use Latte\Runtime as LR;

/** source: /var/www/html/IIS/app/BorrowingModule/Presenters/templates/KnihovnikBorrows.default.latte */
final class Template65183302fe extends Latte\Runtime\Template
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
			foreach (array_intersect_key(['vypujcka' => '21'], $this->params) as $ʟ_v => $ʟ_l) {
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
		echo '<div id="knihovnik-borrows">
	<div id="knihovnik-borrows-back">
		<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Library:Library:", [$libName])) /* line 4 */;
		echo '">Zpět</a>
	</div>
	<h1>Výpůjčky knihovny: ';
		echo LR\Filters::escapeHtmlText($libName) /* line 6 */;
		echo '</h1>

	<table id="knihovnik-table">
	<tr>
		<th>ID</th>
		<th>Username</th>
		<th>Jméno</th>
		<th>Přijmení</th>
		<th>Titul</th>
		<th>Stav</th>
		<th>Knihovna</th>
		<th>Datum vydaní</th>
		<th>Nutno vrátit do</th>
		<th>Detaily</th>
	</tr>
';
		$iterations = 0;
		foreach ($vypujcky as $vypujcka) /* line 21 */ {
			echo '		<tr>
			<td>';
			echo LR\Filters::escapeHtmlText($vypujcka->ID) /* line 23 */;
			echo ' </td>
			<td>';
			echo LR\Filters::escapeHtmlText($vypujcka->username) /* line 24 */;
			echo ' </td>
			<td>';
			echo LR\Filters::escapeHtmlText($vypujcka->meno) /* line 25 */;
			echo ' </td>
			<td>';
			echo LR\Filters::escapeHtmlText($vypujcka->priezvisko) /* line 26 */;
			echo ' </td>
			<td><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Book:Kniha:show", [$vypujcka->ID_titul])) /* line 27 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($vypujcka->ID_titul) /* line 27 */;
			echo '</a> </td>
			<td>';
			echo LR\Filters::escapeHtmlText($vypujcka->stav) /* line 28 */;
			echo ' </td>
			<td>';
			echo LR\Filters::escapeHtmlText($vypujcka->ID_knihovna) /* line 29 */;
			echo ' </td>
			<td>';
			if ($vypujcka->datum_vydano) /* line 30 */ {
				echo LR\Filters::escapeHtmlText($vypujcka->datum_vydano->modifyClone('+'.(($vypujcka->prodlouzeni+1)*14).' day')) /* line 30 */;
			}
			echo '</td>
			<td>';
			if ($vypujcka->datum_vydano) /* line 31 */ {
				echo LR\Filters::escapeHtmlText($vypujcka->datum_vydano->modifyClone('+'.(($vypujcka->prodlouzeni+1)*14).' day')) /* line 31 */;
			}
			echo ' </td>
			<td><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Borrow:", [$vypujcka->ID])) /* line 32 */;
			echo '">Detaily</a></td>
		</tr>
';
			$iterations++;
		}
		echo '	</table>
</div>
';
	}

}
