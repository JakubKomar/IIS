<?php
namespace App\BookModule\Model;
use Nette;

final class  BookFinder
{
	use Nette\SmartObject;
	private $database;

	public function __construct(Nette\Database\Explorer $database) 
	{
		$this->database = $database;
	}

	public function searchBooks(string $text, string $method="nazev")
	{
		//return $this->database->table('kniha')->where('nazev',$text);
		if($method=="nazev")
			return $this->database->query('SELECT * FROM titul WHERE nazev REGEXP  ?', $text);
		else if($method=="zanr")
			return $this->database->query('SELECT * FROM titul WHERE zanry REGEXP  ?', $text);
		else if($method=="tag")
			return $this->database->query('SELECT * FROM titul WHERE tagy REGEXP  ?', $text);
		else
			return null;
	}
}