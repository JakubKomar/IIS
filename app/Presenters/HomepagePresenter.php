<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;


final class HomepagePresenter extends Nette\Application\UI\Presenter
{
    
    private Nette\Database\Explorer $database;

	public function __construct(Nette\Database\Explorer $database)
	{
		$this->database = $database;
	}
	public function renderDefault(): void
	{
		$this->template->knihy = $this->database
			->table('kniha')
			->order('datumVydani DESC')
			->limit(5);

	}
}