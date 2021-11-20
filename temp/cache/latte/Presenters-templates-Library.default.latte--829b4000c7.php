<?php

use Latte\Runtime as LR;

/** source: /var/www/html/IIS/app/LibraryModule/Presenters/templates/Library.default.latte */
final class Template829b4000c7 extends Latte\Runtime\Template
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
		echo '<div id="library">
	<div id="library-back"><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("LibraryDashBoard:")) /* line 3 */;
		echo '">Zpět</a></div>
	<h1>Správa knihovny: ';
		echo LR\Filters::escapeHtmlText($knihovna->ID) /* line 4 */;
		echo '</h1>
	<ul>
		<li><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Borrowing:KnihovnikBorrows:", [$knihovna->ID])) /* line 6 */;
		echo '">Správa rezervací</a></li>
		<li><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":BookTransaction:LibBooks:", [$knihovna->ID])) /* line 7 */;
		echo '">Správa knih</a></li>
		<li><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Order:Orders:", [$knihovna->ID])) /* line 8 */;
		echo '">Objednávky</a></li>


		<li><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("LibraryEdit:", [$knihovna->ID])) /* line 11 */;
		echo '">Editace knihovny</a></li>	
		';
		if ($user->isAllowed('AdminPage')) /* line 12 */ {
			echo '<li><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Library:LibraryAddKnihovnik:", [$knihovna->ID])) /* line 12 */;
			echo '">Editace knihovníků</a></li>';
		}
		echo '
	</ol>
</div>
';
	}

}
