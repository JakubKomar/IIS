<?php

declare(strict_types=1);

namespace App\AdminModule\Presenters;

use Nette;


final class UsersAdminPresenter extends  \App\CoreModule\Presenters\BasePresenter
{
    
	public function __construct()
	{
		
	}
	protected function startup()
	{
		parent::startup();
		if (!$this->getUser()->isAllowed('AdminPage')) 
		{
			$this->error('Forbidden', 403);
		}
	}
	public function renderDefault(): void
	{
		

	}
}
