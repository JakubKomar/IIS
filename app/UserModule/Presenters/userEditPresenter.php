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

	protected function createComponentEditProfileForm(): Form
	{
		$ProfData=$this->eUser->getProfileData($this->getUser()->getIdentity()->getId());
		$form = new Form;
		$form->addText('meno', 'Jméno')->setDefaultValue($ProfData['meno'])->addRule($form::MAX_LENGTH, 'Uživatelské jméno je příliž dlouhé', 48);
		$form->addText('priezvisko', 'Přijmení')->setDefaultValue($ProfData['priezvisko'])->addRule($form::MAX_LENGTH, 'Uživatelské jméno je příliž dlouhé', 48);
		$form->addEmail('email', 'E-mail')->setDefaultValue($ProfData['email'])->addRule($form::MAX_LENGTH, 'Email je příliž dlouhý', 255);
		$form->addText('telefon', 'Telefon')->setDefaultValue($ProfData['telefon'])->addRule($form::MAX_LENGTH, 'telefon je příliž dlouhý', 20);
		$form->addText('mesto', 'Město')->setDefaultValue($ProfData['mesto'])->addRule($form::MAX_LENGTH, 'mesto je příliž dlouhý', 255);
		$form->addText('ulice', 'Ulice')->setDefaultValue($ProfData['ulice'])->addRule($form::MAX_LENGTH, 'ulice je příliž dlouhý', 255);
		$form->addText('psc', 'PSČ')->setDefaultValue($ProfData['psc'])->addRule($form::MAX_LENGTH, 'psc je příliž dlouhý', 6);

		$form->addPassword('password', 'Změna hesla:')->addRule($form::MIN_LENGTH, 'Heslo musí mít alespoň %d znaků', 8);
		$form->addPassword('passwordVerify', 'Heslo pro kontrolu:')
			->addRule($form::EQUAL, 'Hesla se neshodují', $form['password']);
		$form->addSubmit('send', 'Uložit');

		$form->onSuccess[] = [$this, 'editFormSucceeded'];

		return $form;
	}
	public function editFormSucceeded(Form $form, \stdClass $values): void
	{
		$this->eUser->saveProfileData($this->getUser()->getIdentity()->getId(),$values);
	}
}
