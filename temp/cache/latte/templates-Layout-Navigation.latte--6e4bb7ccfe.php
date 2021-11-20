<?php

use Latte\Runtime as LR;

/** source: /var/www/html/IIS/app/CoreModule/Presenters/templates/Layout/Navigation.latte */
final class Template6e4bb7ccfe extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['Navigation' => 'blockNavigation'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('Navigation', get_defined_vars()) /* line 1 */;
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block Navigation} on line 1 */
	public function blockNavigation(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '<div id="navigace">
<nav>
    <ul>
        <li><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Library:ViewLibraries:default")) /* line 5 */;
		echo '">Domovská stránka</a></li>
        ';
		if (!$user->isAllowed('Knihy')) /* line 6 */ {
			echo '<li><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Book:Vyhledani:", [null])) /* line 6 */;
			echo '">Knihy</a></li>';
		}
		echo '
        ';
		if ($user->isAllowed('Knihy')) /* line 7 */ {
			echo '<li><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Book:Vyhledani:", [null])) /* line 7 */;
			echo '">Knihy/Správa knih</a></li>';
		}
		echo '

        ';
		if ($user->isAllowed('Knihovna')) /* line 9 */ {
			echo '<li><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Library:LibraryDashBoard:")) /* line 9 */;
			echo '">Spravované knihovny</a></li>';
		}
		echo '
        ';
		if ($user->isAllowed('OrdersDView')) /* line 10 */ {
			echo '<li><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Order:OrderDView:")) /* line 10 */;
			echo '">Objednávky</a></li>';
		}
		echo '
        ';
		if ($user->isAllowed('AdminPage')) /* line 11 */ {
			echo '<li><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Admin:UsersAdmin:")) /* line 11 */;
			echo '">Správa uživatelů</a></li>';
		}
		echo '

        ';
		if ($user->isAllowed('UserBorrow')) /* line 13 */ {
			echo '<li><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Borrowing:UserBorrows:")) /* line 13 */;
			echo '">Mé výpůjčky</a></li>';
		}
		echo '
        ';
		if (!$user->isLoggedIn()) /* line 14 */ {
			echo '<li><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Login:SignIn:")) /* line 14 */;
			echo '">Přihlášení</a></li>';
		}
		echo '
        ';
		if (!$user->isLoggedIn()) /* line 15 */ {
			echo '<li><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Login:SignUp:")) /* line 15 */;
			echo '">Registrace</a></li>';
		}
		echo '
        ';
		if ($user->isLoggedIn()) /* line 16 */ {
			echo '<li><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":User:UserEdit:")) /* line 16 */;
			echo '">Profil</a></li>';
		}
		echo '
        ';
		if ($user->isLoggedIn()) /* line 17 */ {
			echo '<li><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("logout!")) /* line 17 */;
			echo '">Odhlášení</a></li>';
		}
		echo '
    </ul>
</nav>
</div>
';
	}

}
