<?php

use Latte\Runtime as LR;

/** source: /var/www/html/IIS/app/LoginModule/Presenters/templates/SignIn.default.latte */
final class Template0e4eb69f61 extends Latte\Runtime\Template
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
		echo '<div id="login">
    <h1>Příhlásit se</h1>
    <div id="login-formular">
';
		/* line 5 */ $_tmp = $this->global->uiControl->getComponent("signInForm");
		if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		echo '    </div>
    <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Login:SignUp:")) /* line 7 */;
		echo '">Založit účet</a>
</div>
';
	}

}
