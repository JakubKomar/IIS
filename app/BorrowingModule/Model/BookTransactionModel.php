<?php
namespace App\BorrowingModule\Model;
use App\LoginModule\Model\DuplicateNameException;
use Nette;

final class  BorrowingModel
{
	use Nette\SmartObject;
	private $database;

	public function __construct(Nette\Database\Explorer $database) 
	{
		$this->database = $database;
	}

	public function getBorrows(string $userName)
	{
		return $this->database->table('vypujcka')->where('ID_uzivatel',$userName);
	}
	public function getBorrowsFromLib(string $libId)
	{
		return $this->database->table('vypujcka')->where('ID_knihovna',$libId);
	}

	public function getBorrow(int $ID)
	{
		return $this->database->table('vypujcka')->where('ID',$ID)->fetch();
	}
}