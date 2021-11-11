<?php

declare(strict_types=1);

namespace App\AdminModule\Presenters;

use Nette;


final class UsersAdminPresenter extends  \App\CoreModule\Presenters\LogedPresenter
{
    protected function startup(): void
	{
		parent::startup();
		if (!$this->getUser()->isAllowed('AdminPage')) 
		{
			$this->error('Sem nemáte přístup!', 403);
		}
	}

	public function __construct()
	{
		
	}

	public function renderDefault(): void
	{
		

	}

}
