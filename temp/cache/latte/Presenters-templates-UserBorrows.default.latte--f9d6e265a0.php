<?php

use Latte\Runtime as LR;

/** source: /var/www/html/IIS/app/BorrowingModule/Presenters/templates/UserBorrows.default.latte */
final class Templatef9d6e265a0 extends Latte\Runtime\Template
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
			foreach (array_intersect_key(['vypujcka' => '13'], $this->params) as $ʟ_v => $ʟ_l) {
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
		echo '<div id="user-borrows">
	<h1>Moje výpůjčky</h1>
	<table>
	<tr>
		<th>Titul</th>
		<th>Stav</th>
		<th>Knihovna</th>
		<th>Datum vydani</th>
		<th>nutno vrátit do</th>
		<th>detaily</th>
	</tr>
';
		$iterations = 0;
		foreach ($vypujcky as $vypujcka) /* line 13 */ {
			echo '		<tr>
			<td><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Book:Kniha:show", [$vypujcka->ID_titul])) /* line 15 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($vypujcka->ID_titul) /* line 15 */;
			echo '</a></td>
			<td>';
			echo LR\Filters::escapeHtmlText($vypujcka->stav) /* line 16 */;
			echo ' </td>
			<td><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Library:ViewLibrary:", [$vypujcka->ID_knihovna])) /* line 17 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($vypujcka->ID_knihovna) /* line 17 */;
			echo '</a></td>
			<td>';
			echo LR\Filters::escapeHtmlText($vypujcka->datum_vydano) /* line 18 */;
			echo ' </td>
			<td>';
			if ($vypujcka->datum_vydano) /* line 19 */ {
				echo LR\Filters::escapeHtmlText($vypujcka->datum_vydano->modifyClone('+'.(($vypujcka->prodlouzeni+1)*14).' day')) /* line 19 */;
			}
			echo ' </td>
			<td><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Borrow:", [$vypujcka->ID])) /* line 20 */;
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
