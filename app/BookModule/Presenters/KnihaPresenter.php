<?php

declare(strict_types=1);

namespace App\BookModule\Presenters;
use App\BookModule\Model\BookFinder;
use Nette;
use App\LoginModule\Model\DuplicateNameException;

final class KnihaPresenter extends \App\CoreModule\Presenters\BasePresenter
{
    
	private BookFinder $bookModel;

	public function __construct(BookFinder $bookModel)
	{
        $this->bookModel=$bookModel;
	}

	public function renderShow(string $id): void
	{
		$kniha = $this->bookModel->getBook($id);
		
		if (!$kniha) {
			$this->error('Kniha s není dostupná nebo byla smazána.');
		}
		$this->template->kniha = $kniha;
		$this->template->autori= $this->bookModel->getAutors($id);
		if(!$this->template->autori->count('*'))
			$this->template->autori=null;
		$this->template->voteCount=$this->bookModel->getVoteCount($id);
	}

	public function handleVote(string $bookName): void
	{
		if (!$this->getUser()->isLoggedIn()) 
			$this->error('Operace zamítnuta',403);
		else
		{
			try 
			{
				$this->bookModel->voteBook($bookName,$this->user->getIdentity()->getId());
			}
			catch (DuplicateNameException $e) 
			{
				$this->flashMessage('Již jste hlasoval.');
			}	
		}
	}

}
