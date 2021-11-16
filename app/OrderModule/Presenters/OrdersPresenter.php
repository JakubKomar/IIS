<?php

declare(strict_types=1);

namespace App\OrderModule\Presenters;
use App\OrderModule\Model\OrderModel;

use Nette;
use Nette\Application\UI\Form;
use Tracy\Debugger;
Debugger::enable();
final class OrdersPresenter extends  \App\CoreModule\Presenters\LogedPresenter
{
	protected function startup(): void
	{
		parent::startup();
		$this->resorceAutorize('Orders');
	}

    private OrderModel $OrderModel;

	public function __construct(OrderModel $OrderModel)
	{
        $this->OrderModel=$OrderModel;
	}

	public function renderDefault(string $libraryName=null): void
	{
		if(!$this->OrderModel->autetizateAcessToLib($this->user,$this->user->getIdentity()->getId(),$libraryName))
			$this->error("forbiden",403);
		$this->template->orders= $this->OrderModel->getOrders($libraryName);
		$this->template->libraryName=$libraryName;
	}

	public function handleNewOrder(string $library): void
	{	
		$this->operationAutorize('Orders','add');
		$id=$this->OrderModel->addOrder($library);
		$this->redirect('OrderEdit:',intval($id));
	}

}
