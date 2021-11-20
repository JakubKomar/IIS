<?php

use Latte\Runtime as LR;

/** source: /var/www/html/IIS/app/BorrowingModule/Presenters/templates/Borrow.default.latte */
final class Template2933f035c4 extends Latte\Runtime\Template
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
		echo '<div id="borrow">
	';
		if ($user->isAllowed('UserBorrow')) /* line 3 */ {
			echo '<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("UserBorrows:")) /* line 3 */;
			echo '">Zpět na výpůjčky</a>';
		}
		echo '
	';
		if ($user->isAllowed('KnihovnikBorrow')) /* line 4 */ {
			echo '<div id="borrow-back"><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("KnihovnikBorrows:", [$vypujcka->ID_knihovna])) /* line 4 */;
			echo '">Zpět do správy rezervací</a></div>';
		}
		echo '
		<h1>Výpůjčka id: ';
		echo LR\Filters::escapeHtmlText($vypujcka->ID) /* line 5 */;
		echo '</h1>
		<p>Titul: <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Book:Kniha:show", [$vypujcka->ID_titul])) /* line 6 */;
		echo '">';
		echo LR\Filters::escapeHtmlText($vypujcka->ID_titul) /* line 6 */;
		echo '</a></p>
		<p>Stav: ';
		echo LR\Filters::escapeHtmlText($vypujcka->stav) /* line 7 */;
		echo '</p>
		<p>Knihovna: <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Library:ViewLibrary:", [$vypujcka->ID_knihovna])) /* line 8 */;
		echo '">';
		echo LR\Filters::escapeHtmlText($vypujcka->ID_knihovna) /* line 8 */;
		echo '</a></p>
		<p>Datum vystavení: ';
		echo LR\Filters::escapeHtmlText($vypujcka->datum_vytvoreno) /* line 9 */;
		echo '</p>
		<p>Datum vydani: ';
		echo LR\Filters::escapeHtmlText($vypujcka->datum_vydano) /* line 10 */;
		echo '</p>
		<p>Datum vrácení: ';
		echo LR\Filters::escapeHtmlText($vypujcka->datum_vraceno) /* line 11 */;
		echo '</p>

		<p>Počet prodloužení: ';
		echo LR\Filters::escapeHtmlText($vypujcka->prodlouzeni) /* line 13 */;
		echo '</p>
		
	';
		if ($vypujcka->datum_vydano) /* line 15 */ {
			echo '<p>nutno vrátit do:';
			echo LR\Filters::escapeHtmlText($vypujcka->datum_vydano->modifyClone('+'.(($vypujcka->prodlouzeni+1)*14).' day')) /* line 15 */;
			echo '</p>';
		}
		echo '
	';
		if (isset($pocetDni)) /* line 16 */ {
			echo '<p>';
			if ($nevracenoVterminu) /* line 16 */ {
				echo 'Neodevzdáno v termínu, den:';
			}
			else /* line 16 */ {
				echo 'Počet dní do vrácení';
			}
			echo ':';
			echo LR\Filters::escapeHtmlText($pocetDni) /* line 16 */;
			echo '</p>';
		}
		echo '
	';
		if ($user->isAllowed('UserBorrow')&&$vypujcka->stav=='vydáno') /* line 17 */ {
			if ($vypujcka->prodlouzeni<2) /* line 17 */ {
				echo '<a href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("prodlouzit!")) /* line 17 */;
				echo '">Prodloužit</a>';
			}
		}
		echo '
	';
		if (isset($pokuta)) /* line 18 */ {
			echo '<p>Potenciální pokuta:';
			echo LR\Filters::escapeHtmlText($pokuta) /* line 18 */;
			echo ' </p>';
		}
		echo '
	';
		if ($user->isAllowed('KnihovnikBorrow')&&$vypujcka->stav=='rezervováno') /* line 19 */ {
			echo '<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("vydat!", [$vypujcka->ID])) /* line 19 */;
			echo '">Vydat</a>';
		}
		echo '
	';
		if ($user->isAllowed('KnihovnikBorrow')&&$vypujcka->stav=='vydáno') /* line 20 */ {
			echo '<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("vratit!", [$vypujcka->ID])) /* line 20 */;
			echo '">Vrátit</a>';
		}
		echo '
	';
		if ($user->isAllowed('KnihovnikBorrow')&&$vypujcka->stav=='vydáno') /* line 21 */ {
			echo '<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("vratitVyradit!", [$vypujcka->ID])) /* line 21 */;
			echo '">Vrátit a vyřadit knihu</a>';
		}
		echo '
	';
		if ($user->isAllowed('KnihovnikBorrow')&&($vypujcka->stav=='rezervováno'||$vypujcka->stav=='ve frontě')) /* line 22 */ {
			echo '<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("zamitnout!", [$vypujcka->ID])) /* line 22 */;
			echo '">Zamítnout</a>';
		}
		echo '
	';
		if ($user->isAllowed('UserBorrow')&&($vypujcka->stav=='rezervováno'||$vypujcka->stav=='ve frontě')) /* line 23 */ {
			echo '<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("smazat!")) /* line 23 */;
			echo '">Zrušit</a>';
		}
		echo '
</div>
';
	}

}
