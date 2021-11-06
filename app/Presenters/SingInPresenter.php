<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;
use Nette\Application\UI\Form;


final class SignInPresenter extends Nette\Application\UI\Presenter
{
	/**
	 * Sign-in form factory.
	 */
	protected function createComponentSignInForm(): Form
	{
		$form = new Form;
		$form->addText('username', 'Login:')
			->setRequired('Zadejte login, prosím.');

		$form->addPassword('password', 'Heslo:')
			->setRequired('Zadejte heslo, prosím.');

		$form->addSubmit('send', 'Přihlásit');

		// call method signInFormSucceeded() on success
		$form->onSuccess[] = [$this, 'signInFormSucceeded'];
		return $form;
	}


	public function signInFormSucceeded(Form $form, \stdClass $values): void
	{
		try {
			$this->getUser()->login($values->username, $values->password);
			$this->redirect('Homepage:');

		} catch (Nette\Security\AuthenticationException $e) {
			$form->addError('Incorrect username or password.');
		}
	}


	public function actionOut(): void
	{
		$this->getUser()->logout();
		$this->flashMessage('Odhlášení úspěšné.');
		$this->redirect('Homepage:');
	}
}
