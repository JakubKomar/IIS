<?php

use Latte\Runtime as LR;

/** source: /var/www/html/IIS/app/OrderModule/Presenters/templates/Orders.default.latte */
final class Template5251e44dc7 extends Latte\Runtime\Template
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
			foreach (array_intersect_key(['order' => '16'], $this->params) as $ʟ_v => $ʟ_l) {
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
		echo '<div id="orders">
    <div id="orders-back">
        <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Library:Library:", [$libraryName])) /* line 4 */;
		echo '">Zpět</a>
    </div>
    <h1>Objednávky</h1>
    ';
		if ($user->isAllowed('Orders')) /* line 7 */ {
			echo '<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("NewOrder!", [$libraryName])) /* line 7 */;
			echo '">Vytvořit objednávku</a>';
		}
		echo '
    <div class="medzera"></div>
    <table id="orders-table">
    <tr>
        <th>ID</th>
        <th>Stav</th>
        <th>Datum založení</th>
        <th>Náhled</th>
    </tr>
';
		$iterations = 0;
		foreach ($orders as $order) /* line 16 */ {
			echo '        <tr>
            <td>';
			echo LR\Filters::escapeHtmlText($order->ID) /* line 18 */;
			echo ' </td>
            <td>';
			echo LR\Filters::escapeHtmlText($order->stav) /* line 19 */;
			echo '</td>
            <td>';
			echo LR\Filters::escapeHtmlText($order->datum_zalozenia) /* line 20 */;
			echo '</td>
            <td>
                ';
			if ($order->stav=="vytvořena") /* line 22 */ {
				echo '<a href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("OrderEdit:", [$order->ID])) /* line 22 */;
				echo '">Editovat</a>
                ';
			}
			else /* line 23 */ {
				echo '<a href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Order:", [$order->ID])) /* line 23 */;
				echo '">Zobrazit</a>';
			}
			echo '
            </td>
        </tr>
';
			$iterations++;
		}
		echo '    </table>
</div>
';
	}

}
