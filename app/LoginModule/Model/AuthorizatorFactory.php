<?php
namespace App\LoginModule\Model;
use Nette\Security\IAuthorizator;
use Nette\Security\Permission;

class AuthorizatorFactory
{
	public static function create(): IAuthorizator
	{
		$acl = new Permission();
		$acl->addRole('guest');
        $acl->addRole('registered', 'guest'); 
        $acl->addRole('knihovnik', 'registered'); 
        $acl->addRole('distributor', 'guest'); 
		$acl->addRole('admin', ['knihovnik','distributor',]); 

		$acl->addResource('Vyhledani');
		$acl->allow('registered', 'Vyhledani');

		$acl->addResource('AdminPage');
		$acl->allow('admin', 'AdminPage');
		return $acl;
	}
}