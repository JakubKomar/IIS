<?php
namespace App\UserModule\Model;
use Nette;
use Tracy\Debugger;

Debugger::enable();
final class  EditUser
{
	use Nette\SmartObject;
	private $database;

	public function __construct(Nette\Database\Explorer $database) 
	{
		$this->database = $database;
	}

	public function getProfileData(string $username)
	{
		return $this->database->fetch('SELECT * FROM uzivatel WHERE ID = ?', $username);
	}
}