<?php

namespace App\CoreModule\Presenters;

use Nette;
use App\Model;
use Tracy\Debugger;

Debugger::enable();

abstract class BasePresenter extends Nette\Application\UI\Presenter
{
    public function formatLayoutTemplateFiles():array
    {
        return [__DIR__ ."/templates/@layout.latte",];
    }
}
