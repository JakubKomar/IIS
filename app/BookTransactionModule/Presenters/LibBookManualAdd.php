<?php

declare(strict_types=1);

namespace App\BookTransactionModule\Presenters;

use Nette\Utils\DateTime;
use App\LoginModule\Model\DuplicateNameException;
use Nette;
use Nette\Application\UI\Form;
use App\BookTransactionModule\Model\BookTransactionModel;

final class LibBookManualAddPresenter extends \App\CoreModule\Presenters\LogedPresenter
{
	protected function startup(): void
	{
		parent::startup();
		$this->resorceAutorize('Knihovna');
	}

    private BookTransactionModel $BTM;

	public function __construct(BookTransactionModel $BTM)
	{
        $this->BTM=$BTM;
	}
	
	public function renderDefault(string $libName): void
	{
		if($this->BTM->autorize($this->user, $libName))
			$this->error("forbiden",403);
		$this->template->libName= $libName;
	}

	protected function createComponentBookAddForm(): Form
	{
		$form = new Form;
		$item=$form->addHidden('ID_knihovna');
		if(isset($this->template->libName))
			$item->setDefaultValue($this->template->libName);
		$typ = $this->BTM->getTituls()->fetchPairs('ID','ID');   
        $form->addSelect('ID_titul', 'Titul:', $typ);
		$form->addInteger('mnozstvi', 'Množství:')->setDefaultValue(1)->addRule($form::MIN, 'Minimální množství je 1', 1);

		$form->addSubmit('submit', 'Přidat titul')->onClick[] = [$this, 'AddItem'];
		$form->addProtection();

		return $form;
	}

	public function AddItem(Form $form, \stdClass $values): void
	{
		if($this->BTM->autorize($this->user,$values->ID_knihovna))
			$this->error("forbiden",403);
		$this->BTM->addBook($values->ID_knihovna,$values->mnozstvi,$values->ID_titul);
		$this->redirect('LibBooks:',$values->ID_knihovna);
	}
}
