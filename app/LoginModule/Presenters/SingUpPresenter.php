<?php

declare(strict_types=1);

namespace App\LoginModule\Presenters;

use Nette;
use Nette\Application\UI\Form;
use App\LoginModule\Model\MyAuthenticator;
use App\LoginModule\Model\DuplicateNameException;

final class SignUpPresenter extends \App\CoreModule\Presenters\BasePresenter
{
	private MyAuthenticator $MyAuthenticator;

	public function __construct(MyAuthenticator $MyAuthenticator)
	{
		$this->MyAuthenticator = $MyAuthenticator;
	}

	public function renderDefault( ): void
	{
	}

	protected function createComponentSignUpForm(): Form
	{
		$form = new Form;
		$form->addText('username', 'Login:')->setRequired('Zadejte login, prosím.');

		$form->addPassword('password', 'Heslo:')->setRequired('Zadejte heslo, prosím.');
		$form->addPassword('password2', 'Zopakujte heslo:')->setRequired('Zadejte heslo znovu, prosím.');

		$form->addSubmit('send', 'Registrovat');


		$form->onSuccess[] = [$this, 'signUpFormSucceeded'];
		return $form;
	}


	public function signUpFormSucceeded(Form $form, \stdClass $values): void
	{
		if($values->password!=$values->password2)
			$form->addError('Hesla nejsou stejná');
		else
		{
			try 
			{
				$this->MyAuthenticator->add($values->username, $values->password);
				$this->redirect(':Core:Homepage:');

			} catch (DuplicateNameException $e) 
			{
				$form->addError('Uživatel exituje, zvolte prosím jiný login');
			}
		}
	}
}
