<?php

declare(strict_types=1);

namespace App\BorrowingModule\Presenters;

use Nette\Utils\DateTime;
use App\LoginModule\Model\DuplicateNameException;
use Nette;
use Nette\Application\UI\Form;
use App\BorrowingModule\Model\BorrowingModel;

final class BorrowPresenter extends \App\CoreModule\Presenters\LogedPresenter
{

    private BorrowingModel $BM;

	public function __construct(BorrowingModel $BM)
	{
        $this->BM=$BM;
	}

	public function renderDefault(int $id): void
	{
		$this->template->vypujcka=$this->BM->getBorrow($id);
		/*if($this->BTM->autorize($this->user,$libName))
			$this->error("forbiden",403);*/
			
	}

	public function handleVratit(int $id): void
	{
		if(!$this->getUser()->isInRole('knihovnik'))
		{
			$this->error('Sem nemáte přístup.',403);
		}
		
	}

	public function handleSmazat(int $id): void
	{
		if(!$this->getUser()->isInRole('registrated'))
		{
			$this->error('Sem nemáte přístup.',403);
		}

	}
	
	public function handleVydat(int $id): void
	{
		if(!$this->getUser()->isInRole('knihovnik'))
		{
			$this->error('Sem nemáte přístup.',403);
		}

	}

	public function handleVratitVyradit(int $id): void
	{
		if(!$this->getUser()->isInRole('knihovnik'))
		{
			$this->error('Sem nemáte přístup.',403);
		}

	}

	public function handleZaminout(int $id): void
	{
		if(!$this->getUser()->isInRole('knihovnik'))
		{
			$this->error('Sem nemáte přístup.',403);
		}
	}


}
