<?php
namespace App\OrderModule\Model;
use Nette;

final class  OrderModel
{
	use Nette\SmartObject;
	private $database;

	public function __construct(Nette\Database\Explorer $database) 
	{
		$this->database = $database;
	}

	public function getOrders(string $libraryName)
	{
		return  $this->database->table('objednavka')->where('ID_knihovna',$libraryName);
	}
	public function getOrdersForDistr(string $uzivatelId)
	{
		return  $this->database->table('objednavka')->where('ID_uzivatel_distr',$uzivatelId);
	}
	public function getOrdersAll()
	{
		return  $this->database->table('objednavka');
	}
	public function addOrder(string $library)
	{
		return $this->database->table('objednavka')->insert(['ID_knihovna' => $library,
		'datum_zalozenia'=>date('Y-m-d H:i:s')
		])->ID;
	}
	public function deleteOrder(int $id)
	{
		$this->database->table('objednavka')->where('ID',$id)->delete();
	}
	public function addItem(int $id,\stdClass $values)
	{
		try 
		{
			$this->database->table('polozka_objednavky')->insert([
				'ID_objednavka' => $id,
				'ID_titul' =>$values->ID_titul,
				'mnozstvi' =>$values->mnozstvi,
			]);
		} 
		catch (Nette\Database\UniqueConstraintViolationException $e) 
		{
			$this->database->table('polozka_objednavky')->where('ID_objednavka',$id)->where('ID_titul',$values->ID_titul)->update([
				'mnozstvi' =>$values->mnozstvi,
			]);
		}
	}
	public function getOrder(int $id)
	{
		return $this->database->table('objednavka')->get($id);
	}
	public function getItems(int $id)
	{
		return $this->database->table('polozka_objednavky')->where('ID_objednavka',$id);
	}
	public function getDistributors()
	{
		return $this->database->table('uzivatel')->where('role','distributor');
	}
	public function deleteItem(int $orderId,string $titulId)
	{
		return $this->database->table('polozka_objednavky')->where('ID_objednavka',$orderId)->where('ID_titul',$titulId)->delete();
	}
	public function getTituls()
	{
		return $this->database->table('titul');
	}
	public function sendOrder(int $id,string $distributorLogin)
	{
		$this->database->table('objednavka')->get($id)->update(['stav'=>'odeslano',
			'ID_uzivatel_distr'=>$distributorLogin,
			'datum_podani'=>date('Y-m-d H:i:s')
		]);
	}
	public function sendAutorization(int $id):bool
	{
		if($this->database->table('objednavka')->get($id)->stav=="vytvořena")
		{
			if($this->database->table('polozka_objednavky')->where('ID_objednavka',$id)->count('*')>0)
				return true;
		}
		return false;
	}
	public function addAutorization(int $id):bool
	{
		if($this->database->table('objednavka')->get($id)->stav=="vytvořena")
		{
			return true;
		}
		return false;
	}

	public function autetizateAcessToOrder( $roles,string $login,int $OrderId):bool
	{
		if($roles->isInRole('admin'))
			return true;
		else if($roles->isInRole('distributor'))
		{
			if($this->database->table('objednavka')->get($OrderId)->ID_uzivatel_distr==$login)
				return true;
			else
				return false;
		}
		else if($roles->isInRole('knihovnik'))
		{
			if($this->database->query('SELECT * from  objednavka O,spravuje S WHERE O.ID_knihovna =S.ID_knihovna and O.ID= ? and S.ID_uzivatel= ? ',$OrderId,$login)->getRowCount())
				return true;
			else
				return false;
		}
		else
			return false;
	}
	public function autetizateAcessToLib($roles,string $login,string $library):bool
	{
		if($roles->isInRole('admin'))
			return true;
		if($this->database->query('SELECT * from knihovna K, spravuje S WHERE S.ID_uzivatel= ? and S.ID_knihovna= ? ',$login,$library)->getRowCount())
			return true;
		else
			return false;
	}
	public function handleOrder(int $id)
	{
		$row=$this->database->table('objednavka')->get($id);
		if($row->stav=="odeslano")
		{
			$row->update(['stav'=>'vyřízeno',
				'datum_vyrizeni'=>date('Y-m-d H:i:s')
			]);
			//todo transver to lib
		}
	}

}