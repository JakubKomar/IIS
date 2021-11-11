<?php

namespace App\CoreModule\Presenters;

use Nette;
use App\Model;

abstract class LogedPresenter extends \App\CoreModule\Presenters\BasePresenter
{
    protected function startup(): void
	{	
        if (!$this->getUser()->isLoggedIn()) 
        {
			if ($this->getUser()->getLogoutReason() === \Nette\Http\UserStorage::INACTIVITY) 
            {
				$this->flashMessage('Z důvodu neaktivity jste byl odhlášen.');
			}
			$this->redirect(':Login:signIn:');
		}
		parent::startup();		
	}
}
