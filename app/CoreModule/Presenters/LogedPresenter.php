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
            else
            {
                $this->flashMessage('K přístupu do této sekce musíte být přihlášen.');
            }
			$this->redirect(':Login:SignIn:');
		}
		parent::startup();		
	}
    protected function resorceAutorize(string $resorce):void
    {
        if (!$this->getUser()->isAllowed($resorce)) 
		{
			$this->error('Sem nemáte přístup!', 403);
		}
    }
}

