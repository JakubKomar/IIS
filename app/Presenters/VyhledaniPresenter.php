<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;
use Nette\Application\UI\Form;

final class VyhledaniPresenter extends Nette\Application\UI\Presenter
{
    
    private Nette\Database\Explorer $database;
	public function __construct(Nette\Database\Explorer $database)
	{
		$this->database = $database;
	}

	public function renderShow( $values): void
	{
     
            $this->template->knihy=$values;

	}
    protected function createComponentVyhledaniForm(): Form
    {
        $form = new Form; // means Nette\Application\UI\Form

        $form->addText('vyraz', 'Hledany výraz:')
            ->setRequired();
        $typ = [
            'nazev' => 'Název knihy',
            'zanr' => 'Žánr',
            'isbn' => 'Kód isbn',
        ];
            
        $form->addSelect('typZaznamu', 'Podle čeho hledat:', $typ)
            ->setDefaultValue('nazev');

        $form->addSubmit('send', 'vyhledat');
        $form->onSuccess[] = [$this, 'vyhledaniFormSucceeded'];
        return $form;
    }
    public function vyhledaniFormSucceeded(\stdClass $values): void
    {
        $postId = $this->getParameter('postId');

        $this->flashMessage('Úspěch', 'success');
        $knihy=$this->database->table('kniha')->where('nazev', $values->vyraz);
        $this->forward('Vyhledani:show', $knihy);
    }
}
