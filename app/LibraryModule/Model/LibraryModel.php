<?php
namespace App\LibraryModule\Model;

use Nette;
use Nette\Application\UI\Form;
use App\LoginModule\Model\DuplicateNameException;

use Tracy\Debugger;
Debugger::enable();

final class  LibraryModel
{
	use Nette\SmartObject;
	private $database;

	public function __construct(Nette\Database\Explorer $database) 
	{
		$this->database = $database;
	}

	public function getLibraries()
	{
		return $this->database->table('knihovna');
	}

	public function getLibrary(string $library)
	{
		return $this->database->table('knihovna')->get($library);
	}

	public function getLibrariesAdm(string $role,string $login)
	{
		if($role=='admin')
		{
			return $this->database->table('knihovna');
		}
		else
		{
			return $this->database->query('SELECT * from knihovna K, spravuje S WHERE S.ID_uzivatel= ? and  K.ID = S.ID_knihovna',$login);
		}
	}

	public function getLibraryAdm(string $role,string $login,string $library)
	{
		if($role=='admin')
			return $this->database->query('SELECT * from knihovna K WHERE K.ID = ? ',$library)->fetch();
		else
			return $this->database->query('SELECT * from knihovna K, spravuje S WHERE S.ID_uzivatel= ? and S.ID_knihovna= ? ',$login,$library)->fetch();
	}

	public function autetizateAcess(string $role,string $login,string $library):bool
	{
		if($role=='admin')
			return true;
		if($this->database->query('SELECT * from knihovna K, spravuje S WHERE S.ID_uzivatel= ? and S.ID_knihovna= ? ',$login,$library)->getRowCount())
			return true;
		else
			return false;
	}

	public function saveLibaryData(string $libname,\stdClass $values):void
	{
		$this->database->table('knihovna')->get($libname)->update([
			'popis' => $values->popis,
			'adresa' => $values->adresa,
			'oteviraci_doba' => $values->oteviraci_doba,
		]);
	}

	public function addLibrary(string $name): void
	{
		try 
		{
			$this->database->table('knihovna')->insert(['ID' => $name]);
		} 
		catch (Nette\Database\UniqueConstraintViolationException $e) 
		{
			throw new DuplicateNameException;
		}
	}

	public function deleteLibary(string $name)
	{
		$this->database->table('knihovna')->where('ID', $name)->delete();;
	}

	public function libEditFormCreate(): Form
	{
		$form = new Form;
		$form->addHidden('ID');
		$form->addTextArea('popis', 'Popis')->addRule($form::MAX_LENGTH, 'Popis je příliš dlouhý', 2048);
		$form->addTextArea('oteviraci_doba', 'Otevírací doba')->addRule($form::MAX_LENGTH, 'Otevírací doba je příliš dlouhá', 1024);
		$form->addTextArea('adresa', 'Adresa')->addRule($form::MAX_LENGTH, 'Adresa je příliš dlouhá', 512);
		return $form;
	}
}