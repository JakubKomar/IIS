<?php

declare(strict_types=1);

namespace App\BookModule\Presenters;

use Nette;


final class KnihaPresenter extends \App\CoreModule\Presenters\BasePresenter
{
    
    private Nette\Database\Explorer $database;

	public function __construct(Nette\Database\Explorer $database)
	{
		$this->database = $database;
	}

	public function renderShow(string $id): void
	{
		$kniha = $this->database->table('titul')->get($id);
		
		if (!$kniha) {
			$this->error('Kniha s není dostupná nebo byla smazána.');
		}
		$this->template->kniha = $kniha;
	}
}
