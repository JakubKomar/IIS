<?php

namespace App\CoreModule\Presenters;

use Nette;
use App\Model;


class BasePresenter extends Nette\Application\UI\Presenter
{

    public function formatLayoutTemplateFiles():array
    {
        return [__DIR__ ."/templates/@layout.latte",];
    }

    public function handleLogout():void
    {
        $this->getUser()->logout(true);
        $this->flashMessage('Odhlšení proběhlo úspěšně');
        $this->redirect(':Core:Homepage:');
    }
}
