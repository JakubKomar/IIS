<?php

use Latte\Runtime as LR;

/** source: /var/www/html/IIS/app/BookModule/Presenters/templates/Kniha.show.latte */
final class Templatee871878854 extends Latte\Runtime\Template
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
		echo "\n";
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['autor' => '11', 'borrow' => '35'], $this->params) as $ʟ_v => $ʟ_l) {
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
		echo '<div id="book-show">
    ';
		if ($user->isAllowed('Knihy')) /* line 3 */ {
			echo '<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("BookEdit:", [$kniha->ID])) /* line 3 */;
			echo '">Editovat</a>';
		}
		echo '
    <h1>';
		echo LR\Filters::escapeHtmlText($kniha->ID) /* line 4 */;
		echo '</h1>

    <div class="popis">';
		echo LR\Filters::escapeHtmlText($kniha->popis) /* line 6 */;
		echo '</div>
    <div class="medzera"></div>
';
		if ($autori) /* line 8 */ {
			echo '        <h2>Autoři:</h2>
        <ul>
';
			$iterations = 0;
			foreach ($autori as $autor) /* line 11 */ {
				echo '            <div class="autor">
                <li>';
				echo LR\Filters::escapeHtmlText($autor->meno) /* line 13 */;
				echo ' ';
				echo LR\Filters::escapeHtmlText($autor->priezvisko) /* line 13 */;
				echo '</li>
            </div>
';
				$iterations++;
			}
			echo '        </ul>
';
		}
		echo '    <div class="medzera"></div>
    <h2>Podrobnosti:</h2>
    <p>Vydavatelství: ';
		echo LR\Filters::escapeHtmlText($kniha->vydavatelstvo) /* line 20 */;
		echo '</p>
    <p>Datum vydání: ';
		echo LR\Filters::escapeHtmlText(($this->filters->date)($kniha->datumVydani, 'Y.m.d')) /* line 21 */;
		echo '</p>
    <p>Žánry: ';
		echo LR\Filters::escapeHtmlText($kniha->zanry) /* line 22 */;
		echo '</p>
    <p>Tagy: ';
		echo LR\Filters::escapeHtmlText($kniha->tagy) /* line 23 */;
		echo '</p>

    <p>';
		echo LR\Filters::escapeHtmlText($voteCount) /* line 25 */;
		echo ' uživatel/ů hlasovalo pro tuto knihu</p>
    ';
		if ($user->isLoggedIn()) /* line 26 */ {
			echo '<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Vote!", [$kniha->ID])) /* line 26 */;
			echo '">Hlasovat pro tuto knihu</a>';
		}
		echo '
    <div class="medzera"></div>
    <h2>Lze zapůjčit v:</h2>
    <table id="tabulka-books">
        <tr>
            <th>Knihovna</th>
            <th>Dostupné množství</th>
            <th>Zarezervovat</th>
        </tr>
';
		$iterations = 0;
		foreach ($borrows as $borrow) /* line 35 */ {
			echo '            <tr>
                <td><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Library:ViewLibrary:", [$borrow->ID_knihovna])) /* line 37 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($borrow->ID_knihovna) /* line 37 */;
			echo '</a></td>
                <td>';
			echo LR\Filters::escapeHtmlText($borrow->mnozstvi-$borrow->vydano) /* line 38 */;
			echo '</td>
                <td>';
			if ($userID) /* line 39 */ {
				echo '<a href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("zapujcit!", [$kniha->ID, $borrow->ID_knihovna,$userID])) /* line 39 */;
				echo '">Zarezervovat</a>';
			}
			else /* line 39 */ {
				echo '<a href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("redirectToLogin!")) /* line 39 */;
				echo '">Zarezervovat</a>';
			}
			echo '</td>
            </tr>
';
			$iterations++;
		}
		echo '    </table>
</div>
';
	}

}
