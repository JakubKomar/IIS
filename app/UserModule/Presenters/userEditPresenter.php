<?php

declare(strict_types=1);

namespace App\UserModule\Presenters;
use App\UserModule\Model\EditUser;

use Nette;
use Nette\Application\UI\Form;
use Tracy\Debugger;

Debugger::enable();
final class UserEditPresenter extends  \App\CoreModule\Presenters\LogedPresenter
{
  
    private EditUser $eUser;

	public function __construct(EditUser $eUser)
	{
        $this->eUser=$eUser;
	}

	public function renderDefault(): void
	{

	}

	protected function createComponentEditProfileForm(): Form
	{
		$ProfData=$this->eUser->getProfileData($this->getUser()->getIdentity()->getId());
		$form = new Form;
		//$form->addText('jmeno', 'Jméno')->setDefaultValue($ProfData['jmeno']);
		//$form->addText('prijmeni', 'Přijmení')->setDefaultValue($ProfData['prijmeni']);

		$form->addEmail('email', 'E-mail')->setDefaultValue($ProfData['email']);

		$form->addPassword('password', 'Změna hesla:')->addRule($form::MIN_LENGTH, 'Heslo musí mít alespoň %d znaků', 8);
		$form->addPassword('passwordVerify', 'Heslo pro kontrolu:')
			->addRule($form::EQUAL, 'Hesla se neshodují', $form['password'])
			->setOmitted();
		$form->addSubmit('send', 'Uložit');

		$form->onSuccess[] = [$this, 'editFormSucceeded'];

		return $form;
	}
	public function editFormSucceeded(Form $form, \stdClass $values): void
	{
		
	}
}
