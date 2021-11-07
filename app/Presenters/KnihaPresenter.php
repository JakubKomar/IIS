<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;


final class KnihaPresenter extends Nette\Application\UI\Presenter
{
    
    private Nette\Database\Explorer $database;

	public function __construct(Nette\Database\Explorer $database)
	{
		$this->database = $database;
	}

	public function renderShow(int $id): void
	{
		$kniha = $this->database->table('kniha')->get($id);
		
		if (!$kniha) {
			$this->error('Stránka nebyla nalezena');
		}
		$this->template->kniha = $kniha;
	}
}
