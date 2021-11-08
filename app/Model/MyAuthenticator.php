<?php
namespace App\Model;

use Nette;
use Nette\Security\SimpleIdentity;

class MyAuthenticator implements Nette\Security\Authenticator
{
	use Nette\SmartObject;
	private $database;
	private $passwords;

	public function __construct(Nette\Database\Explorer $database,Nette\Security\Passwords $passwords) 
	{
		$this->database = $database;
		$this->passwords = $passwords;

	}

	public function authenticate(string $username, string $password): SimpleIdentity
	{

		$row = $this->database->table('users')->where('username', $username)->fetch();
		if (!$row) 
		{
			throw new Nette\Security\AuthenticationException('User not found.');
		}

		if ( !$this->passwords->verify($password, $row->password)) 
		{
			throw new Nette\Security\AuthenticationException('Invalid password.');
		}

		return new SimpleIdentity( $row->username,$row->role);
	}
	public function add(string $username, string $password,string $role='registered'): void
	{
		try 
		{
			$this->database->table('users')->insert(['username' => $username,'password' => $this->passwords->hash($password),'role' => $role]);
		} 
		catch (Nette\Database\UniqueConstraintViolationException $e) {
			throw new DuplicateNameException;
		}
	}
}
class DuplicateNameException extends \Exception
{
}