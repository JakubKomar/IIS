<?php

declare(strict_types=1);

namespace App\BookModule\Presenters;
use App\BookModule\Model\BookFinder;
use Nette;


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
	}
}
