<?php

use Latte\Runtime as LR;

/** source: /var/www/html/IIS/app/OrderModule/Presenters/templates/OrderEdit.default.latte */
final class Template6ead935c52 extends Latte\Runtime\Template
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
			foreach (array_intersect_key(['item' => '14'], $this->params) as $ʟ_v => $ʟ_l) {
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
		echo '<div id="order-edit">
    <div id="order-edit-back">
        <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Orders:", [$order->ID_knihovna])) /* line 4 */;
		echo '">Zpět</a>
    </div>
    <h1>Editace objednávky: ';
		echo LR\Filters::escapeHtmlText($order->ID) /* line 6 */;
		echo '</h1>

    <table id="order-edit-table">
    <tr>
        <th>Titul</th>
        <th>Množsví</th>
        <th>Odstranit</th>
    </tr>
';
		$iterations = 0;
		foreach ($items as $item) /* line 14 */ {
			echo '            <tr>
                <td><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Book:Kniha:show", [$item->ID_titul])) /* line 16 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($item->ID_titul) /* line 16 */;
			echo '</a></td>
                <td>';
			echo LR\Filters::escapeHtmlText($item->mnozstvi) /* line 17 */;
			echo '</td>
                <td><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("DeleteItem!", [$order->ID,$item->ID_titul])) /* line 18 */;
			echo '">Odstranit</a></td>
            </tr>
';
			$iterations++;
		}
		echo '    </table>
    <div class="medzera"></div>
    <div class="medzera"></div>
    <div id="order-edit-formular-1">
';
		/* line 25 */ $_tmp = $this->global->uiControl->getComponent("itemCreateForm");
		if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		echo '    </div>
    <div class="medzera"></div>
    <div class="medzera"></div>
    <div id="order-edit-formular-2">
';
		/* line 30 */ $_tmp = $this->global->uiControl->getComponent("sendCreateForm");
		if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		echo '    </div>
</div>
';
	}

}
